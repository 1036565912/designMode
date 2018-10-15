<?php
/**
 * Created by PhpStorm.
 * User: chen
 * Date: 18-10-15
 * Time: 下午8:57
 */
use  Classes;
use Interfaces\DatabaseInterface;
class Pdo implements DatabaseInterface{
    public function connection($host, $username, $password, $dbname, $port)
    {
        // TODO: Implement connection() method.
    }


    public function query($sql)
    {
        // TODO: Implement query() method.
    }


    public function close()
    {
        // TODO: Implement close() method.
    }
}