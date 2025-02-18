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
    <title>Choisis ton personnage</title>
    <link rel="stylesheet" href="../public/assets/style.css">

</head>
<body id="bodyChoixHero">

<h1>Choisis ton personnage, <?= htmlspecialchars($_SESSION['user']->getPseudo()) ?> !</h1>

<div class="heroes-grid">
    <?php foreach ($heroes as $hero): ?>
        <form action="../process/process-heroChoice.php" method="POST" class="hero-card">
            <input type="hidden" name="hero_id" value="<?= htmlspecialchars($hero->getId()) ?>">
            <img src="<?= htmlspecialchars($hero->getSkinPath()) ?>" alt="<?= htmlspecialchars($hero->getPseudo()) ?>" class="hero-image">
            <input type="submit" value="<?= htmlspecialchars($hero->getPseudo()) ?>" class="hero-button">
        </form>
    <?php endforeach; ?>
</div>

</body>
</html>
