<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_faq extends CI_Model
{
    public function all_faq()
    {
        $query = $this->db->query("SELECT * FROM tbl_faq WHERE lang_id=? AND show_on_home='Yes' ORDER BY faq_id ASC", [$_SESSION['sess_lang_id']]);
        return $query->result_array();
    }
}
