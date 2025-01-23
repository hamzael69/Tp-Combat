<?php



require_once '../utils/autoloader.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../public/home.php');
    return;
}

if (
    !isset(
        $_POST['pseudo'],

    )
) {
    header('location: ../public/home.php');
    return;
}

if (
    empty($_POST['pseudo'])

) {
    header('location: ../public/home.php');
    return;
}

// input sanitization
$pseudo = htmlspecialchars(trim($_POST['pseudo']));



// a remplir en fonction de vos prerequis
if (
    strlen($pseudo) > 25
) {
    header('location: ../public/home.php');
    return;
}




$userRepository = new UserRepository();

$user = $userRepository->findByPseudo($pseudo);
$_SESSION["user"] = $user;



if ($user === null) {


    $user = new User(0, $pseudo,null);

    $userRepository->createUser($user, 0);
    
    $user = $userRepository->findByPseudo($pseudo);


    $_SESSION["user"] = $user;
}


header('location: ../public/heroChoice.php');
