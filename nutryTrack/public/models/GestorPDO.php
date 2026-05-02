<?php

class GestorPDO {

    private $db;

    public function __construct() {
        $this->db = Connection::getInstance()->getConn();
    }

   

    public function buscarRecetaId($id){
          $sql = "SELECT * FROM RECIPES WHERE id = :id LIMIT 1";

        $stmt = $this -> db -> prepare($sql);
        $stmt -> bindValue(':id', $id, PDO::PARAM_INT);
        $stmt -> execute();

        $value = $stmt -> fetch (PDO::FETCH_ASSOC);

        if ($value) {
            return new Recipe($value['NAME'], $value['PROTEINS'], $value['CARBS'], $value['FATS'], $value['KCALS'], $value['ID']);
        }

        return false;

    }

        public function buscarUsuarioId($id){
          $sql = "SELECT * FROM USUARIOS WHERE id = :id LIMIT 1";

        $stmt = $this -> db -> prepare($sql);
        $stmt -> bindValue(':id', $id, PDO::PARAM_INT);
        $stmt -> execute();

        $value = $stmt -> fetch (PDO::FETCH_ASSOC);

        if ($value) {
            return new User($value['EMAIL'], $value['USERNAME'], $value['ID']);
        }

        return false;

    }

    public function listar(){
        $consulta="SELECT * FROM REGISTERS";
        $rtdo=$this->db->query($consulta);
        $arrayRegistros=[];
        while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)){
            $receta=$this->buscarRecetaId($value['RECIPE_ID']);
            $usuario=$this->buscarUsuarioId($value['USER_ID']);
            $registro = new Register($receta, $value['DATE'], $value['GRAMS'], $usuario, $value['ID']);
            $arrayRegistros[]=$registro;
        }
        return $arrayRegistros;
        }

    public function registrarUsuario(User $user) {

        try {
            $sql = "INSERT INTO USUARIOS (email, username, password) VALUES (:email, :username, :password)";
            $stmt = $this -> db -> prepare($sql);

            //? Usamos los getters del objeto

            $stmt -> bindValue(':email', $user -> getEmail());
            $stmt -> bindValue(':username', $user -> getUserName());
            $stmt -> bindValue(':password', $user -> getPassword());

            return $stmt -> execute();
        } catch (PDOException $e) {
            echo $e -> getMessage() . $e -> getCode();
        }

    }

    public function buscarUsuarioPorEmail($email) {

        $sql = "SELECT * FROM USUARIOS WHERE email = :email LIMIT 1";

        $stmt = $this -> db -> prepare($sql);
        $stmt -> bindvalue(':email', $email);
        $stmt -> execute();

        $value = $stmt -> fetch (PDO::FETCH_ASSOC);

        if ($value) {
            return new User($value['EMAIL'], $value['USERNAME'], $value['PASSWORD'], $value['ID']);
        }

        return false;

    }

}