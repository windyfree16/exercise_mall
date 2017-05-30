<?php

class IndexController {
	private $_tpl;

	public function __construct($_tpl)
	{
		$this->_tpl = $_tpl;
	}

	// 初始页
	public function index() 
	{

		$this->_tpl->assign('name', '你好');
		$this->_tpl->display(SMARTY_STYLE . 'index.tpl');
	}

}