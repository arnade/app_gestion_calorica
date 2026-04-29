<?php

    class GestorAuth {

        private $user;

        public function __construct()
        {
            $this -> user = Connection::getInstance() -> getConn();
        }

        public function checkUser ($username) {

            $query = "SELECT 1 FROM USUARIOS WHERE USERNAME = :usuario LIMIT 1";
            $stmt = $this -> user -> prepare($query);

            $stmt -> bindValue(':usuario', $username);
            $stmt -> execute();
            
            return $stmt -> fetch (PDO::FETCH_ASSOC) != false;

        }

        public function checkMail ($email) {

            $query = "SELECT 1 FROM USUARIOS WHERE EMAIL = :email LIMIT 1";
            $stmt = $this -> user -> prepare($query);

            $stmt -> bindValue(':email', $email);
            $stmt -> execute();

            return $stmt -> fetch (PDO::FETCH_ASSOC) != false;

        }

        public function hashPassword ($password) {

            $passwordPlana = $password;
            $passwordHash = password_hash($passwordPlana, PASSWORD_DEFAULT);

            return $passwordHash;

        }

        public function verifyPassword($passwordPlana, $passwordHash) {

            return password_verify($passwordPlana, $passwordHash);

        }

    }
