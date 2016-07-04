<?php

namespace ArticoForm\Model;

class User extends Model
{
    private $table = 'users';

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