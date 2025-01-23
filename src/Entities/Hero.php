<?php

class Hero extends Character
{
    private int $id;
    private string $skinPath;

    public function __construct(int $id, string $pseudo, string $skinPath, int $attack, int $hp)
    {
        parent::__construct($pseudo, $attack, $hp);

        
        $this->id = $id ;
        $this->skinPath = $skinPath;
       

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
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }



    /**
     * Get the value of skinPath
     */ 
    public function getSkinPath()
    {
        return $this->skinPath;
    }

    /**
     * Set the value of skinPath
     *
     * @return  self
     */ 
    public function setSkinPath($skinPath)
    {
        $this->skinPath = $skinPath;

        return $this;
    }


}