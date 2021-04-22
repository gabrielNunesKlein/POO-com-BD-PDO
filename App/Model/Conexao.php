<?php

namespace \App\Model;

class Conexao {
    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)){
            sellf::$instance = new \PDO('mysql::host=localhost; dbname=pdo; charset=utf8', 'root', '');
            return $instance;
        }
    }
}