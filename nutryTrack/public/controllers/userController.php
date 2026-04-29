<?php

class UserController {

    protected $gestor;
    protected $auth;

    public function __construct($gestor)
    {
        $this -> gestor = $gestor;
        $this -> auth = new GestorAuth();
    }


    public function alta() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $error = null;
            $email = $_POST['email'];
            $userName = $_POST['username'];
            $passwordPlana = $_POST['password'];

            if ($this -> auth -> checkMail($email)) {

                $error = "El mail ya existe";

            }

            if ($this -> auth -> checkUser($userName)) {

                $error = "El usuario ya existe";

            }

            if ($error == null) {

                $passwordHash = $this -> auth -> hashPassword($passwordPlana);

                $nuevoUsuario = new User($email, $userName, $passwordHash);

                $this -> gestor -> registrarUsuario($nuevoUsuario);

                header("Location: index.php?accion=login");
                exit;
            }
        }

        include "views/alta.php";
    }

}
