<?php

final class Alien extends Monster{
    public function __construct(int $attack = 15, int $hp = 115, string $pseudo = "Alien"){
        
        parent::__construct($pseudo, $attack, $hp);

    }
}