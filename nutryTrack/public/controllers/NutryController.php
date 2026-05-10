<?php

class NutryController
{

    private $gestor;

    public function __construct($gestor)
    {
        $this->gestor = $gestor;
    }

    public function index()
    {
        $registros = $this->gestor->listar();
        include "views/landing.php";
    }

<<<<<<< HEAD
        public function crear() {
            $userId = $_SESSION["usuario_id"];
            $user= $this->gestor->buscarUsuarioId($userId);
=======
    public function crear()
    {
        $userId = $_SESSION["usuario_id"];
        $user = $this->gestor->buscarUsuarioId($userId);
>>>>>>> v1-ABF

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $recipeText = $_POST['receta'];
            $recipeId = intval($recipeText);

            $recipe = $this->gestor->buscarRecetaId($recipeId);
            $date = $_POST['fecha'];
            $grams = $_POST['gramos'];
<<<<<<< HEAD
            
            $registro = new Register ($recipe, $date, $grams, $user);
=======

            $registro = new Register($recipe, $date, $grams, $user);
>>>>>>> v1-ABF

            $this->gestor->agregar($registro);

            header("Location: index.php");
            exit;
        }

        $listaRecetas = $this->gestor->obtenerRecetas();

        include "views/crear.php";
    }
<<<<<<< HEAD
}
=======

    public function editar()
    {
        $registroId = $_GET['id'];
        $registro = $this->gestor->buscarRegistroId($registroId);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $recipeText = $_POST['receta'];
            $recipeId = intval($recipeText);
            $recipe = $this->gestor->buscarRecetaId($recipeId);
            $date = $_POST['fecha'];
            $grams = $_POST['gramos'];

            $registro->setRecipe($recipe);
            $registro->setDate($date);
            $registro->setGrams($grams);

            $this->gestor->actualizar($registro);

            header("Location: index.php");
            exit;
        }

        $listaRecetas = $this->gestor->obtenerRecetas();

        include "views/editar.php";
    }
    
    public function eliminar() {
        $id = $_GET['id'] ?? null;
        $this->gestor->eliminar($id);
        header("Location: index.php");
        exit;
    }
}
>>>>>>> v1-ABF
