<?php
/**控制器基类**/
class Controller {
    protected $_tpl = null;

    protected function __construct()
    {
        $this->_tpl = Tpl::getInstance();
    }

    public function run()
    {
        $_m = isset($_GET['m']) ? $_GET['m'] : 'index';
        method_exists($this, $_m) ? eval('$this->' . $_m .'();') : exit($_m. '方法不存在！');
    }
}