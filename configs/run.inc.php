<?php
// 创建一个实际路径
define('ROOT_PATH', substr(dirname(__FILE__), 0, -8));

// 引入系统配置文件
require_once ROOT_PATH . '/configs/profile.inc.php';

// 引入smarty
require_once ROOT_PATH . '/smarty/Smarty.class.php';



// 自动加载类
// function __autoload($_className)
// {
// 	if (substr($_className, -10) == 'Controller') {
// 		require_once ROOT_PATH . '/controller/' . $_className . '.class.php';
// 	} elseif (substr($_className, -5) == 'Model') {
// 		require_once ROOT_PATH . '/model/' . $_className . '.class.php';
// 	} else {
// 		require_once ROOT_PATH . '/public/' . $_className . '.class.php';
// 	}
// }

spl_autoload_register(function ($_className) {

	if (substr($_className, -10) == 'Controller') {
		require_once ROOT_PATH . '/controller/' . $_className . '.class.php';
	} elseif (substr($_className, -5) == 'Model') {
		require_once ROOT_PATH . '/model/' . $_className . '.class.php';
	} else {
		require_once ROOT_PATH . '/public/' . $_className . '.class.php';
	}

	throw new Exception($_className . '类，不存在！');

});

$_tpl = Tpl::getInstance();

