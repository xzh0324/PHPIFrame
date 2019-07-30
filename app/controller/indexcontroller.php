<?php
class Index extends \core\Iframe
{
    //index/index 就是Index类构造方法
    public function __construct()//等同与__construct()
    {/*{{{*/
    }/*}}}*/

    public function testModel()
    {/*{{{*/
        echo "it is 666<br>";
        $model = new \core\lib\Model;
        $sql = 'select * from tab_User limit 1';
        $exec = $model->query($sql);
        $res = $exec->fetchAll();
        var_dump(33333,$res);exit;
    }/*}}}*/

    public function testView()
    {/*{{{*/
        $temp = \core\lib\conf::get('CTRL', 'route');
        $data = 'Hello World';
        $this->assign('data', $data);
        $this->display('testview');
    }/*}}}*/

    public function __call($methods, $args)
    {/*{{{*/
        echo "it is ".__FUNCTION__.PHP_EOL;
    }/*}}}*/
}

