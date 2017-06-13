<?php

class Tpl{
	static private $_instance;		// 用于存放实例化对象
    static private $_tpl;           // 用于存放Smarty对象


	/**
	 * 公共静态方法获取实例化对象
	 */
	static public function getInstance()
	{
		// 判断$_instance是否属于当前类
		if (!(self::$_instance instanceof self) && !(self::$_tpl instanceof Smarty)) {
		    self::$_tpl = new Smarty();
			self::$_instance = new self();
		}
        return self::$_tpl;
	}

	
	/**
	 * 私有克隆
	 */
	private function __clone() {}

	/**
	 * 私有化构造方法
	 */
	private function __construct() 
	{
		$this->steConfigs();
	}

	/**
	 * smarty 配置
	 */
	private function steConfigs()
	{
        self::$_tpl->template_dir = ROOT_PATH . '/view/';			// 模板目录

        self::$_tpl->config_dir = ROOT_PATH . '/configs/';		// 变量目录

        self::$_tpl->compile_dir = ROOT_PATH . '/compile/';		// 编译目录

        self::$_tpl->cache_dir = ROOT_PATH . '/cache/';			// 缓存目录

        self::$_tpl->caching = false;								// 是否开启缓存

        self::$_tpl->cache_lifetime = 60 * 60 * 24;				// 缓存的生命周期

        self::$_tpl->left_delimiter = '{';						// 左定界符

        self::$_tpl->right_delimiter = '}';						// 又定界符
	}
}