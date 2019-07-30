<?php
/*
 *入口文件
 *1.定义常量
 *2.加载函数库
 *3.启动框架
 * */
define('IFRAME', dirname(__FILE__));
define('CORE', IFRAME."/core");
define('APP', IFRAME."/app");
define('DEBUG', true);

//引入composer的vendor
include("vendor/autoload.php");
if(DEBUG)
{
    ini_set('display_error', 'on');
}
else
{
    ini_set('display_error', 'off');
}


include CORE.'/common/function.php';
include CORE.'/iframe.php';
include CORE.'/lib/route.php';
include CORE.'/lib/model.php';
include CORE.'/lib/conf.php';

spl_autoload_register('\core\Iframe::load');
\core\Iframe::run();


