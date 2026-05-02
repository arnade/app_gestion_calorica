<?php

class NutryController {

    private $gestor;

    public function __construct($gestor) {
        $this->gestor = $gestor;
    }

    public function index() {
        $registros = $this->gestor->listar();
        include "views/landing.php";
    }

}