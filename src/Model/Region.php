<?php

namespace ArticoForm\Model;

class Region extends Model
{
    private $table = 'regions';

    function index()
    {

        $result = $this->db->query("SELECT * FROM " . $this->table);
        return $result->fetchAll();

    }

    function insertNew($data)
    {
        return $this->db->insert($this->table, $data);
    }
}