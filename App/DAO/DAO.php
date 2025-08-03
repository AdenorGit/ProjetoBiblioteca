<?php

namespace App\DAO;

use PDO;
use PDOException;

abstract class DAO extends PDO
{
    protected static $conexao = null;

    public function __construct()
    {
        $host = $_ENV['db']['host'];
        $dbname = $_ENV['db']['database'];

        $dsn = "mysql:host={$host};dbname={$dbname}";

        if(self::$conexao == null){

            self::$conexao = new PDO(
            $dsn, 
            $_ENV['db']['user'], 
            $_ENV['db']['pass'],
            [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
            ]
             );

        }
        


    }
}