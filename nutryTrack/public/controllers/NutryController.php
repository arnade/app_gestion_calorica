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

        public function crear() {
            $userId = $_SESSION["usuario_id"];
            $user= $this->gestor->buscarUsuarioId($userId);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $recipeText = $_POST['receta'];
            $recipeId = intval($recipeText);

            $recipe = $this->gestor->buscarRecetaId($recipeId);
            $date = $_POST['fecha'];
            $grams = $_POST['gramos'];
            
            $registro = new Register ($recipe, $date, $grams, $user);

            $this->gestor->agregar($registro);

            header("Location: index.php");
            exit;
        }

        $listaRecetas = $this->gestor->obtenerRecetas();

        include "views/crear.php";
    }
}