<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_age extends CI_Model
{
    private $table = 'age';

    public function get()
    {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
}
