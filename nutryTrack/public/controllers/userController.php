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
            $username = $_POST['username'];
            $passwordPlana = $_POST['password'];

            if ($this -> auth -> checkMail($email)) {

                $error = "El mail ya existe";

            }

            if ($this -> auth -> checkUser($username)) {

                $error = "El usuario ya existe";

            }

            if ($error == null) {

                $passwordHash = $this -> auth -> hashPassword($passwordPlana);

                $nuevoUsuario = new User($email, $username, $passwordHash);

                $this -> gestor -> registrarUsuario($nuevoUsuario);

                header("Location: index.php?accion=login");
                exit;
            }
        }

        include "views/signup.php";
    }

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email'];
            
            $password = $_POST['password'];
            $recordar = isset($_POST['recordarme']);

            

            $user = $this -> gestor -> buscarUsuarioPorEmail($email);

            if ($user && $this -> auth -> verifyPassword($password, $user -> getPassword())) {

                $_SESSION['usuario_id'] = $user -> getId();
                $_SESSION['usuarioEmail'] = $user -> getEmail();
                $_SESSION['userName'] = $user -> getUserName();

                if ($recordar) {

                    $token = base64_encode($user -> getEmail());

                    setcookie(

                        "usuario_login",
                        $token,
                        [

                            'expires' => time() + (86400 * 3),
                            'path' => '/',
                            'httponly' => true,
                            'samesite' => 'Strict'

                        ]

                    );

                }
                
                header("Location: index.php");
                exit;

            } else {

                $error = "Credenciales Incorrectas.";

            }

        }

        include "views/login.php";

    }

    public function logout() {

        $_SESSION = [];

        session_destroy();

        if (isset($_COOKIE['usuario_login'])) {

            setcookie('usuario_login', '', time() - 3600000, '/');

        }

        header("Location: index.php?accion=login");
        exit;

    }

}
