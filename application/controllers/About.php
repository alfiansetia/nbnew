<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_portfolio');
	}

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_about'] = $this->Model_common->all_page_about();
		$data['feature'] = $this->Model_common->all_feature();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['about'] = $this->Model_common->all_page_about();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$this->load->view('view_header', $data);
		$this->load->view('view_about', $data);
		$this->load->view('view_footer', $data);
	}
}
