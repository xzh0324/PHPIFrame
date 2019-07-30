<?php
namespace core\lib;
class Route
{
    public $controller;
    public $action;
    public function __construct()
    {/*{{{*/
        $this->initControllerAndAction();
    }/*}}}*/

    public function initControllerAndAction()
    {/*{{{*/
        // xxx.com/index/index
        // xxx.com/index.php/index/index  Apache��.htaccess�ļ�ʵ�֣�nginx��Ҫ��ѯ��ʵ��(TODO)
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/')
        {
            $path = $_SERVER['REQUEST_URI']; 
            $pathArr = explode('/', trim($path, '/'));
            $this->controller = isset($pathArr['0']) ? $pathArr['0'] : '';
            $this->action = isset($pathArr['1']) ? $pathArr['1'] : '';
            //��ȡget����
            $this->initGetParams($pathArr);
            return true;
        }
        else
        {
            $this->controller = 'index';
            $this->action = 'index';
            return true;
        }
    }/*}}}*/

    function initGetParams($pathArray)
    {
        assert($pathArray, '����������');
        if(isset($pathArray[0]))
            unset($pathArray[0]);
        if(isset($pathArray[1]))
            unset($pathArray[1]);
        $count = count($pathArray);
        //��������
        $pathArray = array_merge($pathArray, array());
        for($i=0; $i<$count; $i=$i+2)
        {
            if(isset($pathArray[$i]) && isset($pathArray[$i+1]))
                $_GET[$pathArray[$i]] = $pathArray[$i+1];
        }
    }
}

