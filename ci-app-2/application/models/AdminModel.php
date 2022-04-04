<?php

class AdminModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get('forms')->result();
    }

    public function delete($id)
    {
        return $this->db->where('id', $id)->delete('forms');
    }
}