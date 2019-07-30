<?php
namespace core\lib;

//参考视频： https://www.imooc.com/video/12319
class conf
{
    static public $conf;
    static public function get($name, $file)
    {
    /**1. 判断配置文件是否存在
     * 2. 判断配置项是否存在 
     * 3. 缓存配置
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
                    throw new \Exception('没有那个配置项'.$name);
                }
            }
            else
            {
                throw new \Exception('没有配置文件'.$file);
            }
        }
    }

}
