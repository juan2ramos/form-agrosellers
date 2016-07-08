<?php

namespace ArticoForm\Model;

class Farm extends Model
{
    private $table = 'farms';

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