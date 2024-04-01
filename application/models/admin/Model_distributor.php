<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_distributor extends CI_Model 
{

	function get_auto_increment_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_distributor'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function show() {
        $sql = "SELECT b1.*,c2.name as cityname,p3.name as provincename,t3.lang_name
				FROM tbl_distributor b1
				JOIN tbl_city c2
				ON b1.tbl_city = c2.id
				JOIN tbl_province p3
                ON b1.tbl_province = p3.id
                JOIN tbl_lang t3
                ON b1.lang_id = t3.lang_id
                ORDER BY b1.id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

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

    function add($data) {
        $this->db->insert('tbl_distributor',$data);
        return $this->db->insert_id();
    }

    /*function add_photos($data) {
        $this->db->insert('tbl_portfolio_photo',$data);
        return $this->db->insert_id();
    }*/

    function update($id,$data) {
        $this->db->where('id',$id);
        $this->db->update('tbl_distributor',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id);
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
        $query = $this->db->query($sql,array($id));
        return $query->first_row('array');
    }

    function distributor_check($id)
    {
        $sql = 'SELECT * FROM tbl_distributor WHERE id=?';
        $query = $this->db->query($sql,array($id));
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
    
}