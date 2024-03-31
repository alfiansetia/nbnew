<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Model_common');
		$this->load->model('admin/Model_testimonial');
	}

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['testimonial'] = $this->Model_testimonial->show();

		$this->load->view('admin/view_header', $data);
		$this->load->view('admin/view_testimonial', $data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();
		$data['all_lang'] = $this->Model_common->all_lang();

		$error = '';
		$success = '';

		if (isset($_POST['form1'])) {

			if (PROJECT_MODE == 0) {
				$this->session->set_flashdata('error', PROJECT_NOTIFICATION);
				redirect($_SERVER['HTTP_REFERER']);
			}

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('designation', 'Designation', 'trim|required');
			$this->form_validation->set_rules('comment', 'Comment', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}

			$path = $_FILES['photo']['name'];
			$path_tmp = $_FILES['photo']['tmp_name'];

			// image2
			$path2 = $_FILES['photo_1']['name'];
			$path_tmp2 = $_FILES['photo_1']['tmp_name'];

			if ($path != '' && $path2 != '') {
				// image1
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				$file_name = basename($path, '.' . $ext);

				// image2
				$ext2 = pathinfo($path2, PATHINFO_EXTENSION);
				$file_name2 = basename($path2, '.' . $ext2);

				$ext_check = $this->Model_common->extension_check_photo($ext);
				$ext_check2 = $this->Model_common->extension_check_photo($ext2);
				if ($ext_check == FALSE && $ext_check2 == FALSE) {
					$valid = 0;
					$error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
				}
			} else {
				$valid = 0;
				$error .= 'You must have to select a photo for featured photo<br>';
			}

			if ($valid == 1) {
				$next_id = $this->Model_testimonial->get_auto_increment_id();
				foreach ($next_id as $row) {
					$ai_id = $row['Auto_increment'];
				}

				$final_name = 'testimonial-' . $ai_id . '.' . $ext;
				$final_name2 = 'testimonial-2-' . $ai_id . '.' . $ext2;
				move_uploaded_file($path_tmp, './public/uploads/' . $final_name);
				move_uploaded_file($path_tmp2, './public/uploads/' . $final_name2);

				$form_data = array(
					'name'        => $_POST['name'],
					'designation' => $_POST['designation'],
					'photo'       => $final_name,
					'photo_1'       => $final_name2,
					'comment'     => $_POST['comment'],
					'lang_id'     => $_POST['lang_id']
				);
				$this->Model_testimonial->add($form_data);

				$success = 'Testimonial is added successfully!';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'admin/testimonial');
			} else {
				$this->session->set_flashdata('error', $error);
				redirect(base_url() . 'admin/testimonial/add');
			}
		} else {

			$this->load->view('admin/view_header', $data);
			$this->load->view('admin/view_testimonial_add', $data);
			$this->load->view('admin/view_footer');
		}
	}


	public function edit($id)
	{

		// If there is no testimonial in this id, then redirect
		$tot = $this->Model_testimonial->testimonial_check($id);
		if (!$tot) {
			redirect(base_url() . 'admin/testimonial');
			exit;
		}

		$data['setting'] = $this->Model_common->get_setting_data();
		$data['all_lang'] = $this->Model_common->all_lang();

		$error = '';
		$success = '';


		if (isset($_POST['form1'])) {

			if (PROJECT_MODE == 0) {
				$this->session->set_flashdata('error', PROJECT_NOTIFICATION);
				redirect($_SERVER['HTTP_REFERER']);
			}

			$valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('designation', 'Designation', 'trim|required');
			$this->form_validation->set_rules('comment', 'Comment', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$valid = 0;
				$error .= validation_errors();
			}

			$path = $_FILES['photo']['name'];
			$path_tmp = $_FILES['photo']['tmp_name'];

			$path_1 = $_FILES['photo_1']['name'];
			$path_tmp_1 = $_FILES['photo_1']['tmp_name'];

			if ($path != '' && $path_1 != '') {
				$ext = pathinfo($path, PATHINFO_EXTENSION);
				$file_name = basename($path, '.' . $ext);
				$ext_check = $this->Model_common->extension_check_photo($ext);
				if ($ext_check == FALSE) {
					$valid = 0;
					$error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';
				}
			}

			if ($valid == 1) {
				$data['testimonial'] = $this->Model_testimonial->get_testimonial($id);

				if ($path == '' && $path_1 == '') {
					$form_data = array(
						'name'        => $_POST['name'],
						'designation' => $_POST['designation'],
						'comment'     => $_POST['comment'],
						'lang_id'     => $_POST['lang_id']
					);
					$this->Model_testimonial->update($id, $form_data);
				} else {
					if ($path != '') {
						// Update existing photo
						unlink('./public/uploads/' . $data['testimonial']['photo']);
						$ext = pathinfo($path, PATHINFO_EXTENSION);
						$final_name = 'testimonial-' . $id . '.' . $ext;
						// var_dump($ext);
						// die;
						move_uploaded_file($path_tmp, './public/uploads/' . $final_name);
					} else {
						$final_name = $data['testimonial']['photo'];
					}

					if ($path_1 != '') {
						// Update second photo
						unlink('./public/uploads/' . $data['testimonial']['photo_1']);
						$ext_1 = pathinfo($path_1, PATHINFO_EXTENSION);
						$final_name_1 = 'testimonial-2-' . $id . '.' . $ext_1;
						move_uploaded_file($path_tmp_1, './public/uploads/' . $final_name_1);
					} else {
						$final_name_1 = $data['testimonial']['photo_1'];
					}

					$form_data = array(
						'name'        => $_POST['name'],
						'designation' => $_POST['designation'],
						'photo'       => $final_name,
						'photo_1'     => $final_name_1,
						'comment'     => $_POST['comment'],
						'lang_id'     => $_POST['lang_id']
					);
					$this->Model_testimonial->update($id, $form_data);
				}

				$success = 'Testimonial is updated successfully';
				$this->session->set_flashdata('success', $success);
				redirect(base_url() . 'admin/testimonial');
			} else {
				$this->session->set_flashdata('error', $error);
				redirect(base_url() . 'admin/testimonial/edit/' . $id);
			}
		} else {
			$data['testimonial'] = $this->Model_testimonial->get_testimonial($id);
			$this->load->view('admin/view_header', $data);
			$this->load->view('admin/view_testimonial_edit', $data);
			$this->load->view('admin/view_footer');
		}
	}


	public function delete($id)
	{
		// If there is no testimonial in this id, then redirect
		$tot = $this->Model_testimonial->testimonial_check($id);
		if (!$tot) {
			redirect(base_url() . 'admin/testimonial');
			exit;
		}

		if (PROJECT_MODE == 0) {
			$this->session->set_flashdata('error', PROJECT_NOTIFICATION);
			redirect($_SERVER['HTTP_REFERER']);
		}

		$data['testimonial'] = $this->Model_testimonial->get_testimonial($id);
		if ($data['testimonial']) {
			unlink('./public/uploads/' . $data['testimonial']['photo']);
		}

		$this->Model_testimonial->delete($id);
		$success = 'Testimonial is deleted successfully';
		$this->session->set_flashdata('success', $success);
		redirect(base_url() . 'admin/testimonial');
	}
}
