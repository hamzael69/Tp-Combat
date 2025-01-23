<?php

class User{
    private int $id;
    private string $pseudo;
    private ?Hero $chosenHero;

    public function __construct(int $id, string $pseudo, Hero $chosenHero = null)
    {
    
        $this->id = $id ;
        $this->pseudo = $pseudo;

        if($chosenHero){
            $this->chosenHero = $chosenHero;
        }

    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * Get the value of pseudo
     */ 
    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of idHero
     */ 
    public function getChosenHero(): Hero
    {
        return $this->chosenHero;
    }

    /**
     * Set the value of idHero
     *
     * @return  self
     */ 
    public function setChosenHero(Hero $chosenHero): self
    {
        $this->chosenHero = $chosenHero;

        return $this;
    }
}