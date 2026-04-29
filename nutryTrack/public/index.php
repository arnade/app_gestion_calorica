<?php

include_once "autoload.php";

$auth = new GestorAuth();

    var_dump($auth -> checkUser ("user"));
    var_dump($auth -> checkMail ("test@gmail.com"));