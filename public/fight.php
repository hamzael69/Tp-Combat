<?php

include_once '../utils/autoloader.php';


session_start();

/**
 * @var Monster $monster
 */
$monster = $_SESSION['monster'];

/**
 * @var User $user
 */
$user = $_SESSION['user'];



    // var_dump($user->getChosenHero()->getPseudo());

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
<div class="combat-container">
        <h1>Combat entre les héros</h1>

        <div class="fighters">
            <!-- Personnage Utilisé -->
            <div class="fighter" id="fighter1">
                <h2><?= $user->getChosenHero()->getPseudo() ?></h2>
                <img src="./assets/Coybow2.png" alt="Ton Personnage">
                <p>HP: <span id="hp1"><?= $user->getChosenHero()->getHp() ?></span></p>
                <p>ATTACK: <span id="hp1"><?= $user->getChosenHero()->getAttack() ?></span></p>
                
            </div>

              <!-- VS -->
              <div class="vs-container">
                <h2>VS</h2>
            </div>

            <!-- Adversaire -->
            <div class="fighter" id="fighter2">
                <h2><?= $monster->getPseudo() ?></h2>
                <img src="./assets/alien.png" alt="Adversaire">
                <p>HP: <span id="hp2"><?= $monster->getHp() ?> </span></p>
                <p>HP: <span id="hp2"><?= $monster->getAttack() ?> </span></p>
            </div>
            <form action="../process/process-fight.php" method="post">
                <input type="submit" value="Attaquer">
            </form>
        </div>


</body>
</html>