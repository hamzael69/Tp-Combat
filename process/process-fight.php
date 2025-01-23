<?php
require_once '../utils/autoloader.php';

session_start();

/**
 * @var User $user
 */
$user = $_SESSION['user'];

/**
 * @var Monster $monster
 */
$monster = $_SESSION['monster'];

if ($user->getChosenHero()->getHp() > 0 && $monster->getHp() > 0) {
    $user->getChosenHero()->hit($monster);
    if ($monster->getHp() > 0) {
        $monster->hit($user->getChosenHero());
    }
}


$heroRepository = new HeroRepository();

$heroRepository->updateHp($user->getChosenHero()->getId(), $user->getChosenHero()->getHp());

// if ($user->getChosenHero()->getHp() == 0) {
//     $heroRepository->killHero($hero->getId());
// }


header('Location: ../public/fight.php');