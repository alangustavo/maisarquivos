<?php

namespace App\DAO;

use App\DAO\DAO;
use PDO;

class UsersDAO extends DAO
{

    public function getAllUsers()
    {
        $users = $this->pdo
            ->query("SELECT * FROM usuarios")
            ->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getUserByEmail(string $email)
    {
        $statement = $this->pdo->prepare("SELECT * FROM usuarios WHERE email=:email");
        $statement->bindParam('email', $email);
        $statement->execute();
        $users = $statement->fetch(PDO::FETCH_ASSOC);
    }
}
