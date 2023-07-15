<?php

require_once('./models/ClassNot.php');

class Noticias {
    private $noti;

    function __construct(){
        $this->noti = new NoticiaModel();
    }

    function puxarNoticias(){
        $resultData = $this->noti->puxarNoticias();
        require_once('./views/index.php');
    }

}
?>