<?php

header("Access-Control-Allow-Origin: *"); // Permite todas as origens (não recomendado para produção)
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

include ("ClassPubs.php");

$Pubs=new ClassPubs();
$Pubs->retornaPubs();