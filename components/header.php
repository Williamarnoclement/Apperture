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
        <span class="mdl-layout-title"><a href="index.php"><img src="img/logo.png" alt="" style="width: auto;height:25px; margin-right:10px;"></a><b>Vitry</b>-sur-Seine</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield  mdl-textfield--align-right">
          <?php if (isset($_SESSION['identifiant'])): ?>
            <?php echo "Bonjour ".$_SESSION['identifiant']." <a href='deconnexion.php'>Se déconnecter</a>"; ?>
          <?php endif; ?>
        </div>
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
            <a class="mdl-navigation__link" href="modoDir.php">Moderer Directions</a>
            <a class="mdl-navigation__link" href="modoLic.php">Moderer Licences</a>
          <?php endif; ?>
          <a class="mdl-navigation__link" href="deconnexion.php">Se déconnecter</a>
        <?php endif; ?>
      </nav>
    </div>
