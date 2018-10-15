<?php

namespace Interfaces;
interface DatabaseInterface{
    public function connection($host,$username,$password,$dbname,$port);


    public function query($sql);


    public function close();
}