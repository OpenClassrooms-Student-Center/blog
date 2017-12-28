<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 11/12/17
 * Time: 18:14
 */

namespace App;

abstract class DBFactory
{
    protected function connect()
    {
         return new \PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'root', '',
         array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
    }
}
