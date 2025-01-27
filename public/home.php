<?php


include_once '../utils/autoloader.php';


session_start();

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP Jeu de Fight</title>
  <link rel="stylesheet" href="./assets/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body id="bodyHome">
  <header id="headerHome">
    <img src="../public/assets/soul3.png" alt="">
  </header>

  <main>
    <form action="../process/process-pseudo.php" method="post">
      <!-- <label for="hero-name">Nom de votre héros</label> -->

      <input type="text" id="hero-name" name="pseudo" placeholder="Entrez votre pseudo" required>
      <input type="submit" value="Créer" id="boutonValide"></input>
    </form>

  </main>
</body>

</html>