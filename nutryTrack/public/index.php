<?php

include_once "autoload.php";

$auth = new GestorAuth();

    var_dump($auth -> checkUser ("user"));
    var_dump($auth -> checkMail ("test@gmail.com"));

$comidaEjemplo = new Recipe ("Espaguetis", 9,50,3,70);
$registroHoy = new Register (1, $comidaEjemplo, "2026-05-01", 250);

$verProteinas = $registroHoy->calculateProteins() ;
$verCarbs= $registroHoy->calculateCarbs(); 

echo $verProteinas . "<br>" ;
echo $verCarbs;