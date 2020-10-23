<?php

namespace App;

use PDO;

class DataBase
{
    private $db_name = 'test';
    private $db_user = 'root';
    private $db_password = '';
    private $db_host = '127.0.0.1';
    private $pdo;

    private function getPDO()
    {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host, $this->db_user,
                $this->db_password,);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement)
    {
        $q = $this->getPDO()->query($statement);
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
}