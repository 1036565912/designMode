<?php
/**
 * 自定义数据库连接类
 * Created by PhpStorm.
 * User: 10365
 * Date: 2018/10/15
 * Time: 15:06
 */
namespace Helper;
class Database{
    private $_driver = 'mysql';
    private $_host = '127.0.0.1';
    private $_port = 3306;
    private $_username = 'root';
    private $_password = 'cl123456';
    private $_dbName = 'test';
    public  $connection = null;
    public static $DataBase = null;
    public function __construct(){
        try{
            $dsn =  "{$this->_driver}:host={$this->_host};dbname={$this->_dbName};port={$this->_port}";
            $this->connection = new \PDO($dsn,$this->_username,$this->_password);
            $this->connection->query('set names utf8'); //连接初始化使用
        }catch(\Exception $e){
            exit($e->getMessage());
        }
    }

    public static function getInstance(){
        if(empty(self::$DataBase)){
            self::$DataBase = new self();
        }
        return self::$DataBase;
    }


    public function query($sql){
        $result  = $this->connection->query($sql);
        return $result;
    }
}