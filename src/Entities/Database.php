<?php

final class Database
{
    private static ?PDO $pdo = null;

    public static function getConnection(): PDO
    {
        if (self::$pdo === null){
            try {
                $host = "localhost";
                $dbname = "tp_combat";
                $login = "root";
                $password = "";

                self::$pdo = new PDO("mysql:host={$host};dbname={$dbname}" , $login, $password);
            } catch (PDOException $error) {
                echo "Erreur de connexion : " . $error->getMessage();
            }
        }

        return self::$pdo;
    }
}