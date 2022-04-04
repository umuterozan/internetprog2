<?php

class FormModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert('forms', $data);

        if ($this->db->affected_rows() > 0)
            return true;

        return false;
    }
}
