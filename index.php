<?php


require_once('./controllers/Noticias.php');

$not = new Noticias();
$not->puxarNoticias();
?>