<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/material.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>Apperture</title>
</head>
<body>
  <div class="mdl-layout mdl-js-layout menu">
    <header class="mdl-layout__header mdl-layout__header--scroll header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Apperture</span>
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Apperture</span>
      <nav class="mdl-navigation">
        <?php if (!isset($_SESSION['identifiant'])): ?>
          <a class="mdl-navigation__link" href="index.php">Accueil</a>
          <a class="mdl-navigation__link" href="inscription.php">S'inscrire</a>
          <a class="mdl-navigation__link" href="connexion.php">Se connecter</a>
        <?php endif; ?>
        <?php if (isset($_SESSION['identifiant'])): ?>
          <a class="mdl-navigation__link" href="homepage.php">Rechercher</a>
          <?php if ($_SESSION['isAdmin'] == true): ?>
            <a class="mdl-navigation__link" href="ModoUsr.php">Moderer Utilisateurs</a>
            <a class="mdl-navigation__link" href="modoApp.php">Moderer Applications</a>
            <a class="mdl-navigation__link" href="modoEdito.php">Moderer Editeurs</a>
          <?php endif; ?>
          <a class="mdl-navigation__link" href="deconnexion.php">Se déconnecter</a>
        <?php endif; ?>
      </nav>
    </div>
