<?php

class GestorPDO {

    private $db;

    public function __construct() {
        $this->db = Connection::getInstance()->getConn();
    }

   

    public function buscarRecetaId($id){
          $query = "SELECT * FROM RECIPES WHERE id = :id LIMIT 1";

        $stmt = $this -> db -> prepare($query);
        $stmt -> bindValue(':id', $id, PDO::PARAM_INT);
        $stmt -> execute();

        $value = $stmt -> fetch (PDO::FETCH_ASSOC);

        if ($value) {
            return new Recipe($value['NAME'], $value['PROTEINS'], $value['CARBS'], $value['FATS'], $value['KCALS'], $value['ID']);
        }

        return false;

    }

        public function buscarUsuarioId($id){
          $query = "SELECT * FROM USUARIOS WHERE id = :id LIMIT 1";

        $stmt = $this -> db -> prepare($query);
        $stmt -> bindValue(':id', $id, PDO::PARAM_INT);
        $stmt -> execute();

        $value = $stmt -> fetch (PDO::FETCH_ASSOC);

        if ($value) {
            return new User($value['EMAIL'], $value['USERNAME'], $value['PASSWORD'], $value['ID']);
        }

        return false;

    }

    public function listar(){
        $query="SELECT * FROM REGISTERS";
        $rtdo=$this->db->query($query);
        $arrayRegistros=[];
        while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)){
            $receta=$this->buscarRecetaId($value['RECIPE_ID']);
            $usuario=$this->buscarUsuarioId($value['USER_ID']);
            $registro = new Register($receta, $value['DATE'], $value['GRAMS'], $usuario, $value['ID']);
            $arrayRegistros[]=$registro;
        }
        return $arrayRegistros;
        }

    public function obtenerRecetas() {
        $query= "SELECT ID, NAME FROM RECIPES ORDER BY NAME ASC";
        $rtdo = $this->db->query($query);

        $recetas = [];

        while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)){
            $recetas[] = $value;
        }

        return $recetas;
    }

        public function agregar($registro) {
        try {

                $query = "INSERT INTO REGISTERS (USER_ID, RECIPE_ID, DATE, GRAMS) VALUES (:usuario_id, :receta_id, :fecha, :gramos)";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':usuario_id', $registro->getUserId());
                $stmt->bindValue(':receta_id', $registro->getRecipeId());
                $stmt->bindValue(':fecha', $registro->getDate());
                $stmt->bindValue(':gramos', $registro->getGrams());
             
           // Ejecutamos
            return $stmt->execute(); 
            
        } catch (PDOException $e) {
               die("Error de la base de datos al guardar: " . $e->getMessage());
        }
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