<?php
require_once '../utils/autoloader.php';
// VALIDATION DE FORMULAIRE

$heroRepository = new HeroRepository();
$hero = $heroRepository->find($_POST['hero_id']);


if (!$hero) {
    header('Location: ../public/choice-hero.php');
    exit;
}

$chosenHero = $heroRepository->create($hero);


if (!$chosenHero) {
    header('Location: ../public/choice-hero.php');
    exit;
}





$monster = new Alien();

session_start();

/**
 * @var User $user
 */
$user = $_SESSION['user'];


$user->setChosenHero($chosenHero);





$userRepo = new UserRepository();
$userRepo->update($user);

$_SESSION['monster'] = $monster;




header('Location: ../public/fight.php');
exit;
