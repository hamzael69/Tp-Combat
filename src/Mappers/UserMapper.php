<?php

final class UserMapper {
    public static function mapToObject(array $userData) {
        return new User(
            $userData['id'],
            $userData['pseudo'],
            $userData['id_chosen_hero']
            // $userData['hp']
        );
    }
}