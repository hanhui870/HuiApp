<?php
namespace Controller\Error;

use HuiLib\App\Front;

/**
 * 默认控制器
 *
 * @author 祝景法
 * @since 2013/09/20
 */
class Index extends \Controller\Base
{
    /**
     * init
     */
    public function init()
    {
        parent::init();
        
        $this->disableView();
    }
    
	public function exceptionAction($exception)
	{
	    echo 'Exception found.'.PHP_EOL;
	    var_export($exception);
	    die();
	}
}