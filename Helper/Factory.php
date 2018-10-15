<?php
/**
 * 自定义工厂类  减少代码耦合度
 * Created by PhpStorm.
 * User: 10365
 * Date: 2018/10/15
 * Time: 15:01
 */
namespace Helper;
use Helper\Database;
class Factory{

    /**
     * 简单工厂方法
     * @param $className 需要实例化的名称
     * @return class
     */
    public static function createObj($className){
        if($className == 'Database'){
            return  Database::getInstance();
        }
    }
}