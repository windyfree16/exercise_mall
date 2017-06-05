<?php

class Tpl extends Smarty{
	static private $_instance;		// 用于存放实例化对象

	/**
	 * 公共静态方法获取实例化对象
	 */
	static public function getInstance()
	{
		echo 123;
		// 判断$_instance是否属于当前类
		if (!(self::$_instance instanceof self)) {
			self::$_instance = new self();
		}
		return self::$_instance;
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
		$this->template_dir = ROOT_PATH . '/view/';			// 模板目录

		$this->config_dir = ROOT_PATH . '/configs/';		// 变量目录

		$this->compile_dir = ROOT_PATH . '/compile/';		// 编译目录

		$this->cache_dir = ROOT_PATH . '/cache/';			// 缓存目录

		$this->caching = false;								// 是否开启缓存

		$this->cache_lifetime = 60 * 60 * 24;				// 缓存的生命周期

		$this->left_delimiter = '{';						// 左定界符

		$this->right_delimiter = '}';						// 又定界符
	}
}