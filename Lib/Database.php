<?php

namespace Lib;

class Database
{
private $config = array(
    'database_dsn'  => 'mysql:dbname=PenClupDB;host=localhost',
    'database_user' => 'root',
    'database_pass' => null,
);
public function GetConnection()
{
    $pdo = new PDO(
        $this->config['database_dsn'],
        $this->config['database_user'],
        $this->config['database_pass']
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}
}