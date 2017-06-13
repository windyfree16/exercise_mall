<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/13
 * Time: 23:08
 */
class ListController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_tpl->assign('name', '你好');
        $this->_tpl->display(SMARTY_STYLE . 'list.tpl');
    }

    public function list_list()
    {
        echo 'list_list';
    }
}