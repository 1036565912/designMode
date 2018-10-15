<?php
/**  自定义自动加载方法 */

namespace  Helper;
class Loader{

    /**
     * 注册自动加载
     */
    public static function autoload(){
        spl_autoload_register([__CLASS__,'register']);
    }

    /**
     * 定义需要注册的加载方法
     * @param $className
     * @tip php自动加载会携带上前面的命名空间路径  无论是用use引入的 还是写的全局路径的
     */
    public static function register($className){
        require BASE_PATH.'/'.str_replace('\\','/',$className).'.php';
    }
}