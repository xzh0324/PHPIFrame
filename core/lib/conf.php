<?php
namespace core\lib;

//�ο���Ƶ�� https://www.imooc.com/video/12319
class conf
{
    static public $conf;
    static public function get($name, $file)
    {
    /**1. �ж������ļ��Ƿ����
     * 2. �ж��������Ƿ���� 
     * 3. ��������
     */
        $file = IFRAME.'/core/config/'.$file.'.php';
        if(isset(self::$conf[$file]))
        {
            return self::$conf[$file];
        }
        else
        {
            if(is_file($file))
            {
                $conf = include($file);
                if(isset($conf[$name]))
                {
                    self::$conf[$name] = $conf[$name];
                    return $conf[$name];
                }
                else
                {
                    throw new \Exception('û���Ǹ�������'.$name);
                }
            }
            else
            {
                throw new \Exception('û�������ļ�'.$file);
            }
        }
    }

}
