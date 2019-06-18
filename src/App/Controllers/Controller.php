<?php
namespace App\Controllers;
use App\Model\Model as ModelAlias;
use App\Model\Config;
use App\Model\DataBase;


class Controller
{
    /**
     * @return DataBase|array
     * Exemplo de uso das funções
     */
    public function index()
    {
       return (new ModelAlias)->getCli();
    }

    /**
     * @return DataBase
     * Função teste
     */
    public function teste(): DataBase
    {
        $conect = new Config();
        return new Database($conect->Conexao());
    }

}