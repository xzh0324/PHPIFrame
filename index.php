<?php
/*
 *����ļ�
 *1.���峣��
 *2.���غ�����
 *3.�������
 * */
define('IFRAME', dirname(__FILE__));
define('CORE', IFRAME."/core");
define('APP', IFRAME."/app");
define('DEBUG', true);

//����composer��vendor
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


