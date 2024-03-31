<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_blog extends CI_Model
{
    public function detail_blog($id)
    {
        $query = $this->db->query("SELECT * FROM tbl_news WHERE news_id=? ORDER BY news_id DESC", array($id));
        return $query->row();
    }

    public function relate($category_id)
    {
        $query = $this->db->query("SELECT *
				FROM tbl_news
                WHERE category_id=$category_id
                ORDER BY news_id ASC", [$_SESSION['sess_lang_id']]);
        return $query->result_array();
    }
}
