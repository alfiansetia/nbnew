<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_testimonial');
        $this->load->model('Model_blog');
    }

    public function index()
    {
        $data['setting'] = $this->Model_common->all_setting();
        $data['page_home'] = $this->Model_common->all_page_home();
        $data['page_news'] = $this->Model_common->all_page_news();
        $data['page_home_lang_independent'] = $this->Model_common->all_page_home_lang_independent();
        $data['comment'] = $this->Model_common->all_comment();
        $data['social'] = $this->Model_common->all_social();
        $data['all_news'] = $this->Model_common->all_news();
        $data['all_news_category'] = $this->Model_common->all_news_category();

        // category1
        $data['blogCategoryOne'] = $this->Model_common->all_news_by_category(1);

        // category1
        $data['blogCategoryTwo'] = $this->Model_common->all_news_by_category(2);

        // category1
        $data['blogCategoryThree'] = $this->Model_common->all_news_by_category(3);


        $this->load->view('view_header', $data);
        $this->load->view('view_news', $data);
        $this->load->view('view_footer', $data);
    }

    public function blog_detail($id)
    {
        $data['setting'] = $this->Model_common->all_setting();
        $data['page_testimonial'] = $this->Model_common->all_page_testimonial();
        $data['comment'] = $this->Model_common->all_comment();
        $data['social'] = $this->Model_common->all_social();

        $data['detail'] = $this->Model_blog->detail_blog($id);
        $data['relate_blog'] = $this->Model_blog->relate($data['detail']->category_id);

        $this->load->view('view_header', $data);
        $this->load->view('view_blog_detail', $data);
        $this->load->view('view_footer', $data);
    }
}
