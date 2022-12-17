<?php

namespace App\DAO;

use PDO;

abstract class DAO
{
    /**
     * PDO
     *
     * @var PDO
     */
    protected $pdo;

    public function __construct()
    {
        $host = $_ENV["DB_HOST"];
        $name = $_ENV["DB_NAME"];
        $user = $_ENV["DB_USER"];
        $pass = $_ENV["DB_PASS"];
        $port = $_ENV["DB_PORT"];
        $dsn = "mysql:host={$host};dbname={$name};port={$port}";
        $this->pdo = new PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    }
}
