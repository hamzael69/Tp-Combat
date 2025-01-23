<?php



include_once '../utils/autoloader.php';


session_start();


$heroRepository = new HeroRepository();

$heroes = $heroRepository->findAll();

if(!$heroes)
{
    header("Location: ./create-hero.php");
    exit;
}


?>

<!-- 
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du Personnage - Mon Jeu</title>
    <link rel="stylesheet" href="../public/assets/style.css">
</head>

<body>

    <div class="container">
        <h1>Choisis ton personnage, <?= $_SESSION['user']->getPseudo() ?> !</h1>

        <div class="character-selection">
            <div class="character-card" id="character1">
                <img src="./assets/cowboys.jpg" alt="Personnage 1">
                <h2>Cole "Silver Bullet" Blackwood</h2>
                <a class="choose-button" >Choisir</a>
            </div>

            <div class="character-card" id="character2">
                <img src="./assets/Coybow2.png" alt="Personnage 2">
                <h2>Dakota "The Viper" Blackthorn</h2>
                <a class="choose-button" href="./fight.php?idHero=2" >Choisir</a>
            </div>
        </div>

    </div>

</body>

</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/assets/style.css">
</head>
<body>
<h1>Choisis ton personnage, <?= $_SESSION['user']->getPseudo() ?> !</h1>
    <?php 
    /**
     * @var Hero $hero
     */
    foreach($heroes as $hero):  ?>

        <form action="../process/process-heroChoice.php" method="POST">
            <input type="hidden" name="hero_id" value="<?= htmlspecialchars($hero->getId()) ?>">
            <input type="submit" value="<?= htmlspecialchars($hero->getPseudo()) ?>">
        </form>
        
    <?php endforeach  ?>

    <p>
        <img src="./assets/guts2.png" alt="">
    </p>
    <p>
        <img src="./assets/Ulquirra2.png" alt="">
    </p>
</body>
</html>