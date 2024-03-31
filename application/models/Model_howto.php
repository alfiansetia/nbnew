<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_howto extends CI_Model
{
    public function load_data($nm = null, $ct = null)
    {
        if ($nm != null && $ct != null) {
            $query = $this->db->query("SELECT b1.*,c2.name as cityname,p3.name as provincename,t3.lang_name
				FROM tbl_distributor b1
				left JOIN tbl_city c2
				ON b1.tbl_city = c2.id
				left JOIN tbl_province p3
                ON b1.tbl_province = p3.id
                left JOIN tbl_lang t3
                ON b1.lang_id = t3.lang_id
                WHERE b1.lang_id=? and b1.name like ? and c2.name like ?
                ORDER BY b1.id ASC", [$_SESSION['sess_lang_id'], "%" . $nm . "%", "%" . $ct . "%"]);
        } else {
            $query = $this->db->query("SELECT b1.*,c2.name as cityname,t3.lang_name
				FROM tbl_distributor b1
				left JOIN tbl_city c2
				ON b1.tbl_city = c2.id
                left JOIN tbl_lang t3
                ON b1.lang_id = t3.lang_id
                ORDER BY b1.id ASC", [$_SESSION['sess_lang_id']]);
        }
        return $query->result_array();
    }
}
