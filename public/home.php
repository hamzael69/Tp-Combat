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
<body>
  <div class="container">
    <header>
      <img src="./assets/logo.png" alt="Logo" class="logo">
      <h1>TP Jeu de Fight</h1>
      <p>Un jeu de fight au tour par tour en PHP pour apprendre les bases de la POO</p>
    </header>
    <main>
      <div class="form-container">
        <h2>Créez votre héros</h2>
        <form action="../process/process-pseudo.php" method="post">
          <div class="input-group">
            <label for="hero-name">Nom de votre héros</label>
            <input type="text" id="hero-name" name="pseudo" placeholder="Entrez un nom" required>
          </div>
          <input type="submit" value="Créer" id="boutonValide"></input>
        </form>
      </div>
    </main>
  </div>
</body>
</html> 