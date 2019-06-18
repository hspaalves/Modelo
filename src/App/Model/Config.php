<?php

namespace App\Model;


use PDO;
use PDOException;

class Config
{
    /**
     * @return array
     */

    protected function string(): array
    {
        return  array(
            'username' => '',
            'password' => '',
            'hostname' => '',
            'database' => ''
        );
    }

    /**
     * @return bool|PDO
     */
    public function Conexao(){
        try {

            $connect = $this->string();
            $dsn = 'mysql:dbname='.$connect['database'].';host='.$connect['hostname'].'';

            return new PDO($dsn, $connect['username'], $connect['password']);

        }catch (PDOException $exception) {

            echo 'Connection failed: ' . $exception->getMessage();
            return false;
        }
    }
}