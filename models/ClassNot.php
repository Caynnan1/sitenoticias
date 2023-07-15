<?php

require_once('./configuration/connect.php');

class NoticiaModel extends Connect{
    private $tabela;

    function __construct(){
        parent::__construct();
        $this->tabela = 'noticias';
    }

    function puxarNoticias(){
        $sqlSelect = $this->connection->query("SELECT * FROM $this->tabela");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }

}
?>