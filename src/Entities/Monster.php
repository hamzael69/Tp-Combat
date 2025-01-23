<?php
abstract class Monster extends Character{

    public function __construct(string $pseudo, int $attack, int $hp){

        parent::__construct($pseudo, $attack, $hp);
    }
}