<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 2017-01-25
 * Time: 11:05
 */

class Users  extends DB\SQL\Mapper{

    public function __construct(DB\SQL $db) {
        parent::__construct($db,'users');
    }

    public function all() {
        $result = $this->load();
        return $result;
    }

    public function getById($id) {
        $result = $this->load(array('user_id=?',$id));
        return $result;
    }

    public function add() {
        $this->copyFrom('POST');
        $this->save();
    }

    public function edit($id) {
        $this->load(array('user_id=?',$id));
        $this->copyFrom('POST');
        $this->update();
    }

    public function delete($id) {
        $this->load(array('user_id=?',$id));
        $this->erase();
    }


}