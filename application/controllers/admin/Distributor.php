<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Distributor extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Model_common');
		$this->load->model('admin/Model_distributor');
	}

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['distributor'] = $this->Model_distributor->show();

		$this->load->view('admin/view_header', $data);
		$this->load->view('admin/view_distributor', $data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['all_lang'] = $this->Model_common->all_lang();
		$data['province'] = $this->Model_common->get_all_province();
		$data['city'] = $this->Model_common->get_all_city();

		$error = '';
		$success = '';

		if (isset($_POST['form1'])) {

			if (PROJECT_MODE == 0) {
				$this->session->set_flashdata('error', PROJECT_NOTIFICATION);
				redirect($_SERVER['HTTP_REFERER']);
			}

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('province', 'Province', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
			$this->form_validation->set_rules('url_google', 'Url Google', 'trim|required');
			$this->form_validation->set_rules('url_maps', 'Url Maps', 'trim|required');


			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}

			$path = $_FILES['photo']['name'];
			$path_tmp = $_FILES['photo']['tmp_name'];

			if ($path != '') {
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				$file_name = basename($path, '.' . $ext);
				$ext_check = $this->Model_common->extension_check_photo($ext);
				if ($ext_check == FALSE) {
					$valid = 0;
					$error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
				}
			} else {
				$valid = 0;
				$error .= 'You must have to select a photo for featured photo<br>';
			}


			if ($valid == 1) {
				$next_id = $this->Model_distributor->get_auto_increment_id();
				foreach ($next_id as $row) {
					$ai_id = $row['Auto_increment'];
				}

				$final_name = 'distributor-' . $ai_id . '.' . $ext;
				move_uploaded_file($path_tmp, './public/uploads/' . $final_name);

				$form_data = array(
					'name'             => $_POST['name'],
					'tbl_province'    => $_POST['province'],
					'tbl_city'          => $_POST['city'],
					'address'      => $_POST['address'],
					'photo'   => $final_name,
					'longitude'       => $_POST['longitude'],
					'latitude'         => $_POST['latitude'],
					'lang_id'          => $_POST['lang_id'],
					'phone'       => $_POST['phone'],
					'url_google'       => $_POST['url_google'],
					'url_maps'       => $_POST['url_maps'],
				);
				$this->Model_distributor->add($form_data);

				$success = 'Distributor is added successfully!';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'admin/distributor');
			} else {
				$this->session->set_flashdata('error', $error);
				$this->load->view('admin/view_header', $data);
				$this->load->view('admin/view_distributor_add', $data);
				$this->load->view('admin/view_footer');
			}
		} else {
			$this->load->view('admin/view_header', $data);
			$this->load->view('admin/view_distributor_add', $data);
			$this->load->view('admin/view_footer');
		}
	}


	public function edit($id)
	{

		// If there is no service in this id, then redirect
		$tot = $this->Model_distributor->distributor_check($id);
		if (!$tot) {
			redirect(base_url() . 'admin/distributor');
			exit;
		}

		$data['setting'] = $this->Model_common->get_setting_data();
		$data['all_lang'] = $this->Model_common->all_lang();
		$data['province'] = $this->Model_common->get_all_province();
		$data['city'] = $this->Model_common->get_all_city();

		$error = '';
		$success = '';


		if (isset($_POST['form1'])) {

			if (PROJECT_MODE == 0) {
				$this->session->set_flashdata('error', PROJECT_NOTIFICATION);
				redirect($_SERVER['HTTP_REFERER']);
			}

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('province', 'Province', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
			$this->form_validation->set_rules('url_google', 'Url Google', 'trim|required');
			$this->form_validation->set_rules('url_maps', 'Url Maps', 'trim|required');

			$path = $_FILES['photo']['name'];
			$path_tmp = $_FILES['photo']['tmp_name'];

			if ($path != '') {
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				$file_name = basename($path, '.' . $ext);
				$ext_check = $this->Model_common->extension_check_photo($ext);
				if ($ext_check == FALSE) {
					$valid = 0;
					$error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
				}
			}


			if ($valid == 1) {
				$data['distributor'] = $this->Model_distributor->getData($id);

				if ($path == '') {
					$form_data = array(
						'name'             => $_POST['name'],
						'tbl_province'    => $_POST['province'],
						'tbl_city'          => $_POST['city'],
						'address'      => $_POST['address'],
						'longitude'       => $_POST['longitude'],
						'latitude'         => $_POST['latitude'],
						'lang_id'          => $_POST['lang_id'],
						'phone'       => $_POST['phone'],
						'url_google'       => $_POST['url_google'],
						'url_maps'       => $_POST['url_maps'],
					);
					$this->Model_distributor->update($id, $form_data);
				} else {
					unlink('./public/uploads/' . $data['distributor']['photo']);

					$final_name = 'distributor-' . $id . '.' . $ext;
					move_uploaded_file($path_tmp, './public/uploads/' . $final_name);

					$form_data = array(
						'name'             => $_POST['name'],
						'tbl_province'    => $_POST['province'],
						'tbl_city'          => $_POST['city'],
						'address'      => $_POST['address'],
						'photo'   => $final_name,
						'longitude'       => $_POST['longitude'],
						'latitude'         => $_POST['latitude'],
						'lang_id'          => $_POST['lang_id'],
						'phone'       => $_POST['phone'],
						'url_google'       => $_POST['url_google'],
						'url_maps'       => $_POST['url_maps'],
					);
					$this->Model_distributor->update($id, $form_data);
				}


				$success = 'Distributor is updated successfully';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'admin/distributor');
			} else {
				$this->session->set_flashdata('error', $error);
				$this->load->view('admin/view_header', $data);
				$this->load->view('admin/view_distributor_edit', $data);
				$this->load->view('admin/view_footer');
			}
		} else {
			$data['distributor'] = $this->Model_distributor->getData($id);
			$this->load->view('admin/view_header', $data);
			$this->load->view('admin/view_distributor_edit', $data);
			$this->load->view('admin/view_footer');
		}
	}


	public function delete($id)
	{
		$tot = $this->Model_distributor->distributor_check($id);
		if (!$tot) {
			redirect(base_url() . 'admin/distributor');
			exit;
		}

		if (PROJECT_MODE == 0) {
			$this->session->set_flashdata('error', PROJECT_NOTIFICATION);
			redirect($_SERVER['HTTP_REFERER']);
		}

		$data['distributor'] = $this->Model_distributor->getData($id);
		if ($data['distributor']) {
			unlink('./public/uploads/' . $data['distributor']['photo']);
		}

		/*$portfolio_photos = $this->Model_portfolio->get_all_photos_by_category_id($id);
        foreach($portfolio_photos as $row) {
			unlink('./public/uploads/portfolio_photos/'.$row['photo']);
        }*/

		$this->Model_distributor->delete($id);
		//$this->Model_portfolio->delete_photos($id);

		$success = 'Distributor is deleted successfully';
		$this->session->set_flashdata('success', $success);
		redirect(base_url() . 'admin/distributor');
	}

	/*public function single_photo_delete($photo_id=0,$portfolio_id=0) {

		if(PROJECT_MODE == 0) {
			$this->session->set_flashdata('error',PROJECT_NOTIFICATION);
			redirect($_SERVER['HTTP_REFERER']);
		}

  		$portfolio_photo = $this->Model_portfolio->portfolio_photo_by_id($photo_id);
  		unlink('./public/uploads/portfolio_photos/'.$portfolio_photo['photo']);

  		$this->Model_portfolio->delete_portfolio_photo($photo_id);

  		redirect(base_url().'admin/portfolio/edit/'.$portfolio_id);

    }*/

	public function import()
	{
		$this->output->set_content_type('application/json');
		$this->load->helper('file');

		/* Allowed MIME(s) File */
		$file_mimes = array(
			'application/octet-stream',
			'application/vnd.ms-excel',
			// 'application/x-csv',
			// 'text/x-csv',
			// 'text/csv',
			// 'application/csv',
			'application/excel',
			'application/vnd.msexcel',
			'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
		);

		if (isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

			$array_file = explode('.', $_FILES['file']['name']);
			$extension  = end($array_file);

			if ('csv' == $extension) {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else if ('xls' == $extension) {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
			} else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}

			$spreadsheet = $reader->load($_FILES['file']['tmp_name']);
			$sheet_data  = $spreadsheet->getActiveSheet(0)->toArray();
			$array_data  = [];

			for ($i = 1; $i < count($sheet_data); $i++) {
				$data = array(
					'name'       	=> $sheet_data[$i]['0'],
					'address' 		=> $sheet_data[$i]['1'],
					'phone' 		=> $sheet_data[$i]['2'],
					'url_maps' 		=> $sheet_data[$i]['3'],
					'tbl_city'    	=> $this->Model_distributor->get_city($sheet_data[$i]['4'])['id'] ?? null,
					'lang_id'    	=> $this->Model_distributor->get_lang($sheet_data[$i]['5'])['lang_id'] ?? null,
				);
				$array_data[] = $data;
			}
			if (count($array_data) > 0) {
				$this->Model_distributor->insert_batch($array_data);
				echo json_encode(['message' => 'Success!', 'status' => true]);
			} else {
				echo json_encode(['message' => 'Empty Data!', 'status' => false]);
			}
		} else {
			echo json_encode(['message' => 'File Not Allowed!', 'status' => false]);
		}
		return;
	}
}
