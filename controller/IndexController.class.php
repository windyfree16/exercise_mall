<?php

class IndexController extends Controller{

	public function __construct()
	{
		parent::__construct();
	}

	// 初始页
	public function index() 
	{

		$this->_tpl->assign('name', '你好');
		$this->_tpl->display(SMARTY_STYLE . 'index.tpl');
	}

	public function add()
    {
        echo 'add方法';
    }

}