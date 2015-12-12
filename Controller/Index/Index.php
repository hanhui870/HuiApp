<?php
namespace Controller\Index;

use Module\ViewHelper\Topic;
use Model\Table\Discuss;
use Controller\Discuss\Square;
use Model\Table\SystemFriendlink;

/**
 * 默认控制器
 *
 * @author 祝景法
 * @since 2013/09/20
 */
class Index extends \Controller\Base
{
    
	public function indexAction()
	{
	    echo '<title>HuiApp</title>';
	    echo 'Hello world';
	    exit;
	}
}