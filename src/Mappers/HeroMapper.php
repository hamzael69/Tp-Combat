<?php

final class HeroMapper {
    public static function mapToObject(array $heroData) {
        return new Hero(
            $heroData['id'],
            $heroData['pseudo'],
            $heroData['skinPath'],
            $heroData['attack'],
            $heroData['hp']
           
        );
    }
}