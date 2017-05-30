<?php
	//创建一个实际路径
	define('ROOT_PATH', dirname(__FILE__));

	require_once ROOT_PATH . '/smarty/Smarty.class.php';

	$_smarty = new Smarty();

	$_smarty->template_dir = ROOT_PATH . '/templates/';		// 模板目录

	$_smarty->config_dir = ROOT_PATH . '/configs/';			// 变量目录

	$_smarty->compile_dir = ROOT_PATH . '/templates_c';		// 编译目录

	$_smarty->cache_dir = ROOT_PATH . '/cache/';			// 缓存目录

	$_smarty->caching = false;								// 是否开启缓存

	$_smarty->left_delimiter = '{';							// 左定界符

	$_smarty->right_delimiter = '}';						// 又定界符



	//$a = 'sss';
	//$_smarty->assign('name', $a);
	//$_smarty->display('index.tpl');		