<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_distributor extends CI_Model
{

    function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_distributor'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function show()
    {
        $sql = "SELECT t1.*, t3.name as cityname, t4.name as provincename, t2.lang_name
        FROM tbl_distributor t1
        LEFT JOIN tbl_lang t2 ON t1.lang_id = t2.lang_id
        LEFT JOIN tbl_city t3 ON t1.tbl_city = t3.id
        LEFT JOIN tbl_province t4 ON t1.tbl_province = t4.id
        ORDER BY t1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    // function show()
    // {
    //     $sql = "SELECT DISTINCT b1.*,c2.name as cityname,p3.name as provincename,t3.lang_name
    // 			FROM tbl_distributor b1
    // 			JOIN tbl_city c2
    // 			ON b1.tbl_city = c2.id
    // 			JOIN tbl_province p3
    //             ON b1.tbl_province = p3.id
    //             JOIN tbl_lang t3
    //             ON b1.lang_id = t3.lang_id
    //             ORDER BY b1.id ASC";
    //     $query = $this->db->query($sql);
    //     return $query->result_array();
    // }

    /*function get_all_photos_by_category_id($id)
    {
        $sql = "SELECT * 
    			FROM tbl_portfolio_photo 
    			WHERE portfolio_id=?";
        $query = $this->db->query($sql,array($id));
        return $query->result_array();
    }

    function get_all_photo_category()
    {
        $sql = "SELECT * 
				FROM tbl_portfolio_category
				ORDER BY category_name ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }*/

    function add($data)
    {
        $this->db->insert('tbl_distributor', $data);
        return $this->db->insert_id();
    }

    /*function add_photos($data) {
        $this->db->insert('tbl_portfolio_photo',$data);
        return $this->db->insert_id();
    }*/

    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_distributor', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_distributor');
    }

    /*function delete_photos($id)
    {
        $this->db->where('portfolio_id',$id);
        $this->db->delete('tbl_portfolio_photo');
    }*/

    function getData($id)
    {
        $sql = 'SELECT * FROM tbl_distributor WHERE id=?';
        $query = $this->db->query($sql, array($id));
        return $query->first_row('array');
    }

    function distributor_check($id)
    {
        $sql = 'SELECT * FROM tbl_distributor WHERE id=?';
        $query = $this->db->query($sql, array($id));
        return $query->first_row('array');
    }

    /*function ben_photo_by_id($id)
    {
        $sql = 'SELECT * FROM tbl_portfolio_photo WHERE id=?';
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }
    function delete_portfolio_photo($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tbl_portfolio_photo');
    }*/

    function get_province($name)
    {
        $sql = 'SELECT * FROM tbl_province WHERE name=?';
        $query = $this->db->query($sql, array($name));
        return $query->first_row('array');
    }

    function get_city($name)
    {
        $sql = 'SELECT * FROM tbl_city WHERE name=?';
        $query = $this->db->query($sql, array($name));
        return $query->first_row('array');
    }

    function get_lang($name)
    {
        $sql = 'SELECT * FROM tbl_lang WHERE lang_name=?';
        $query = $this->db->query($sql, array($name));
        return $query->first_row('array');
    }

    public function insert_batch(array $data)
    {
        return $this->db->insert_batch('tbl_distributor', $data);
    }
}
