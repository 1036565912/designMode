<?php
namespace Interfaces;
/** 定义的统一的API来封装不同的类 */
/**  */
interface DatabaseInterface{
    public function connection($host,$username,$password,$dbname,$port);
    public function query($sql);
    public function close();
}