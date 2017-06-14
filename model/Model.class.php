<?php
class Model extends DB{
    protected $_db;

    protected function __construct()
    {
        $this->_db = parent::getInstance();
    }
}