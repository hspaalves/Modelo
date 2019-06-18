<?php
namespace App\Model;


class Model extends Config
{
    /**
     * @return array
     * Função teste para buscar dados do cliente
     */
    public function getCli(): array
    {
        return (new DataBase($this->Conexao()))->getAllRecords('clientes', '*', '', 'ORDER BY id DESC LIMIT 100');
    }
}