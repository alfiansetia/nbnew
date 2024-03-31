<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_testimonial extends CI_Model
{
    public function all_testimonial()
    {
        $query = $this->db->query("SELECT * FROM tbl_testimonial WHERE lang_id=?", [$_SESSION['sess_lang_id']]);
        return $query->result_array();
    }
}
