<?php
/**实例化工厂**/
class Factory {
    static private $_controller = null;

    static public function setController()
    {
        // 获取a参数并实例化
        eval('self::$_controller = new '. ucfirst(isset($_GET['a']) ? $_GET['a'] : 'Index') . 'Controller();');

        return self::$_controller;
    }
}