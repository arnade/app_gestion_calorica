<?php

class Register {

    
    protected $id;
    protected $user;
    protected $recipe;
    protected $date;
    protected $grams; 

    public function __construct($recipe, $date, $grams, $user = null,  $id=0){
        
        $this->recipe=$recipe;
        $this->date=$date;
        $this->grams=$grams;
        $this->user=$user;
        $this->id=$id;
    }

    public function calculateProteins(){
        $totalProteins= ($this->recipe->getProteins() * $this->grams)/100 ;
        return $totalProteins; 
    }

    public function calculateCarbs(){
        $totalCarbs= ($this->recipe->getCarbs() * $this->grams)/100 ;
        return $totalCarbs; 
    }

    public function calculateFats(){
        $totalFats= ($this->recipe->getFats() * $this->grams)/100 ;
        return $totalFats; 
    }

        public function calculateKcals(){
        $totalKcals= ($this->recipe->getKcals() * $this->grams)/100 ;
        return $totalKcals; 
    }

    public function getUserId(){
        $userId = $this->user->getId();
        return $userId;
    }

    public function getRecipeId(){
        $recipeId = $this->recipe->getId();
        return $recipeId;
    }

    public function getRecipeName(){
        $recipeName= $this->recipe->getName();
        return $recipeName;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }

    public function getRecipe(){
        return $this->recipe;
    }

    public function setRecipe($recipe){
        $this->recipe = $recipe;
        return $this;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;
        return $this;
    }

    public function getGrams(){
        return $this->grams;
    }

    public function setGrams($grams){
        $this->grams = $grams;
        return $this;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user = $user;
        return $this;
    }

}