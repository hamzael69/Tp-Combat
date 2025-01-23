<?php
abstract class HeroChosen extends Character{

    public function __construct(string $pseudo, int $hp){

        parent::__construct($pseudo, $hp);
    }
}