<?php

class Register {

    
    protected $id;
    protected $user_id;
    protected $recipe;
    protected $date;
    protected $grams; 

    public function __construct($user_id, $recipe, $date, $grams, $id=0){
        $this->user_id=$user_id;
        $this->recipe=$recipe;
        $this->date=$date;
        $this->grams=$grams;
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


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     */
    public function setUserId($user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of recipe
     */
    public function getRecipe()
    {
        return $this->recipe;
    }

    /**
     * Set the value of recipe
     */
    public function setRecipe($recipe): self
    {
        $this->recipe = $recipe;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of grams
     */
    public function getGrams()
    {
        return $this->grams;
    }

    /**
     * Set the value of grams
     */
    public function setGrams($grams): self
    {
        $this->grams = $grams;

        return $this;
    }
    

}