<?php
	//创建一个实际路径
	define('ROOT_PATH', dirname(__FILE__));

	require_once ROOT_PATH . '/smarty/Smarty.class.php';

	$_smarty = new Smarty();

	$_smarty->template_dir = ROOT_PATH . '/templates/';		// 模板目录

	$_smarty->config_dir = ROOT_PATH . '/configs/';			// 变量目录

	$_smarty->compile_dir = ROOT_PATH . '/templates_c';		// 编译目录

	$_smarty->caching = false;								// 是否开启缓存

	$a = 'sss';
	$_smarty->assign('name', $a);
	$_smarty->display('index.tpl');		