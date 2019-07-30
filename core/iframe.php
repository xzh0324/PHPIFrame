<?php
namespace core;

class Iframe
{/*{{{*/
    static public $classMap = array();
    public $assign;
    static public function run()
    {
        $route = new \core\lib\Route();
        $controller = $route->controller;
        $action = $route->action;
        $class = new $controller;
        $class->$action();
    }

    //自动加载类
    static public function load($class)
    {/*{{{*/
        if(isset($classMap[$class]))
        {
            return true;
        }
        else
        {
            $class = str_replace('\\', '/', $class);
            $file = APP."/controller/{$class}controller.php";
            if(is_file($file))
            {
                include_once($file);
                self::$classMap[$class] = $class;
            }
            else
            {
                return false;
            }
        }
    }/*}}}*/

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $file = APP.'/view/'.$file.".html";
        if(is_file($file))
        {
            //打散数组
            extract($this->assign);
            include_once($file);
        }
    }
}/*}}}*/

