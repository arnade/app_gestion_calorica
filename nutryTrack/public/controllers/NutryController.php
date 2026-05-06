<?php

class NutryController {

    private $gestor;

    public function __construct($gestor) {
        $this->gestor = $gestor;
    }

    public function index() {
        $registros = [];

        if (isset($_SESSION['usuario_id'])) {
            $registros = $this->gestor->listar($_SESSION['usuario_id']);
        }

        include "views/landing.php";
    }

}
