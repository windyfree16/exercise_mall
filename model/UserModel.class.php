<?php
class UserModel extends Model {
    public function __construct()
    {
        parent::__construct();

        var_dump($this->_db);
    }
}