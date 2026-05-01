<?php

class Recipe {

    protected $id;
    protected $name;
    protected $proteins;
    protected $carbs;
    protected $fats; 
    protected $kcals;

    public function __construct ($name, $proteins, $carbs, $fats, $kcals, $id=0){
        $this->name=$name;
        $this->proteins=$proteins;
        $this->carbs=$carbs;
        $this->fats=$fats;
        $this->kcals=$kcals;
        $this->id=$id;
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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of proteins
     */
    public function getProteins()
    {
        return $this->proteins;
    }

    /**
     * Set the value of proteins
     */
    public function setProteins($proteins): self
    {
        $this->proteins = $proteins;

        return $this;
    }

    /**
     * Get the value of carbs
     */
    public function getCarbs()
    {
        return $this->carbs;
    }

    /**
     * Set the value of carbs
     */
    public function setCarbs($carbs): self
    {
        $this->carbs = $carbs;

        return $this;
    }

    /**
     * Get the value of fats
     */
    public function getFats()
    {
        return $this->fats;
    }

    /**
     * Set the value of fats
     */
    public function setFats($fats): self
    {
        $this->fats = $fats;

        return $this;
    }

    /**
     * Get the value of kcals
     */
    public function getKcals()
    {
        return $this->kcals;
    }

    /**
     * Set the value of kcals
     */
    public function setKcals($kcals): self
    {
        $this->kcals = $kcals;

        return $this;
    }
}