<?php

class GestorPDO {

    private $db;

    public function __construct() {
        $this->db = Connection::getInstance()->getConn();
    }

    public function listar(){
    $consulta="SELECT * FROM REGISTERS";
    $rtdo=$this->db->query($consulta);
    $arrayRegistros=[];
    while ($value = $rtdo->fetch(PDO::FETCH_ASSOC)){
        $receta=$this->gestor->buscarReceta($value['recipe_id']);
        $registro = new Register($receta, $value['date'], $value['grams'], $usuario, $value['id']);
        $arrayRegistros[]=$registro;
    }
    return $arrayRegistros;
    }

    public function buscarReceta($id){
          $sql = "SELECT * FROM RECIPES WHERE id = :id LIMIT 1";

        $stmt = $this -> db -> prepare($sql);
        $stmt -> bindvalue(':id', $id);
        $stmt -> execute();

        $value = $stmt -> fetch (PDO::FETCH_ASSOC);

        if ($value) {
            return new Recipe($value['name'], $value['proteins'], $value['carbs'], $value['fats'], $value['kcals'], $value['id']);
        }

        return false;

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
            return new User($value['email'], $value['username'], $value['password'], $value['id']);
        }

        return false;

    }

}