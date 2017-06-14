<?php
/**
 * 数据库链接类，不直接使用
 * 不会被污染，不能直接调用
 **/
class DB {
    private $_pdo;  // PDO对象

    static private $_instance;  // 实例化对象

    // 静态方法获取实例化对象
    static protected function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    // 私有克隆
    private function __clone(){}

    // 私有构造方法
    private function __construct()
    {
        try {
            $this->_pdo = new PDO('mysql:host=localhost;dbname=mall', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

}