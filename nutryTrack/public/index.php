<?php

include_once "autoload.php";

$auth = new GestorAuth();

    echo $auth -> checkUser ("user");