<?php

class Rol extends DB\SQL\Mapper{

    public function __construct(DB\SQL $db) {
        parent::__construct($db,'rol');
    }

    public function getRol($id) {
        $result = $this->load(array('rol_id = ?',$id));
        return $result;
    }
}