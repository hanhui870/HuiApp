<?php
/**
 * 应用入口文件，不做更多操作
 * @author 祝景法
 * @since 2013/08/11
 */
//运行模式
define ( 'RUN_METHOD', 'web' );

//相关路径常量设置，都以路径分隔符结尾
define ( 'APP_PATH', substr ( dirname ( __FILE__ ), 0, - (strlen ( dirname ( __FILE__ ) ) - strrpos ( dirname ( __FILE__ ), DIRECTORY_SEPARATOR ) - 1) ) );
define ( 'WWW_PATH', dirname ( __FILE__ ) . DIRECTORY_SEPARATOR );

//应用运行配置文件
define ( 'APP_CONFIG', APP_PATH . 'Config' . DIRECTORY_SEPARATOR . 'App.ini' );

//加载引导文件
include_once '../../HuiLib/Bootstrap.php';
\HuiLib\Bootstrap::getInstance()->createApp()->run();


