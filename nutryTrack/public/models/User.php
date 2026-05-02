<?php

class User {

    private $id;
    private $email;
    private $userName;
    private $password; 
    
    public function __construct ($email, $userName, $password, $id=0){
        $this->email= $email;
        $this->userName= $userName;
        $this->password= $password;
        $this->id= $id;
    }

    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getUserName(){
        return $this->userName;
    }

    public function setUserName($userName){
        $this->userName = $userName;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
        return $this;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }
}