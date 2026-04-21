<?php

    class GestorAuth extends Connection {

        public function __construct() {
            parent::__construct();
        }

        public function checkUser ($username) {

            $query = "SELECT * FROM USUARIOS WHERE USERNAME = :usuario";
            $stmt = $this -> conn -> prepare($query);

            $stmt -> bindValue(':usuario', $username);
            $stmt -> execute();
            
            $name = $stmt -> fetch (PDO::FETCH_ASSOC);

            if ($name != NULL) {

                return 1;

            } else {

                return 0;

            }

        }

    }