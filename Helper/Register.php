<?php
/**
 * 自定义注册类
 * 用于全局使用注册的对象信息
 * Created by PhpStorm.
 * User: 10365
 * Date: 2018/10/15
 * Time: 16:51
 */

namespace Helper;
class Register{
    public static $registerTree = [];

    /**
     * 注册方法
     * @param $alias  注册的对象的别名
     * @param $obj    需要注册的对象
     * @return bool
     * @date 2018/10/15
     */
    public static function set($alias,$obj){
        self::$registerTree[$alias] = $obj;
        return true;
    }

    /**
     * 获取注册的对象
     * @param $alias
     * @return mixed
     */
    public static function get($alias){
        return self::$registerTree[$alias];
    }

    public static function _unset($alias){
        unset(self::$registerTree[$alias]);
        return true;
    }
}