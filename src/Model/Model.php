<?php
namespace ArticoForm\Model;

use voku\db\DB;

class Model
{
    protected $db;
    public function __construct()
    {
        DB::getInstance('localhost', 'root', 'secret', 'agrosellersForm');
        $this->db = DB::getInstance();
    }

}