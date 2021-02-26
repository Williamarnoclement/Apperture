<?php

  if ($_POST['identifiant'] == null || $_POST['mdp'] == null) {
    $newURL = "../connexion.php?incorrectCredentials";
    header('Location: '.$newURL);
  } else {
    $log_identifiant = $_POST['identifiant'];
    $log_mdp = $_POST['mdp'];
    //si les credentials ne sont pas vides, on tente de se connecter
    $verification =  "SELECT identifiant, hash, salt, isAdmin, isTechnicien, isEnAttente, isVIP  FROM app_Utilisateur WHERE identifiant='$log_identifiant'";
    //récupération de la connexion à la Base de donnée
    require 'WAC_DB.php';
    //on récupère les données de la base
    foreach  ($db->query($verification) as $row) {
      $db_identifiant = $row['identifiant'];
      $db_hash = $row['hash'];
      $db_salt = $row['salt'];
      $db_isAdmin = $row['isAdmin'];
      $db_isTechnicien = $row['isTechnicien'];
      $db_isEnAttente = $row['isEnAttente'];
      $db_isVIP = $row['isVIP'];
    }
    //on cypte le mot de passe rentré dans le formulaire
    $log_hash = crypt($log_mdp, $db_salt);
    if ($log_hash == $db_hash) {
      //echo "connexion réussie";
      session_start();
      $_SESSION['identifiant'] = $log_identifiant;
      //on définit les privilèges
      $_SESSION['isAdmin'] = $db_isAdmin;
      $_SESSION['isTech'] = $db_isTechnicien;
      $_SESSION['isWait'] = $db_isEnAttente;
      $_SESSION['isVIP'] = $db_isVIP;

      $newURL = "../homepage.php";
      header('Location: '.$newURL);
    } else {
      $newURL = "../connexion.php?incorrectCredentials";
      header('Location: '.$newURL);
    }
  }


 ?>
