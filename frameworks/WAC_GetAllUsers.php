<?php
  $verification =  "SELECT identifiant, nom, prenom, isAdmin, isTechnicien, isEnAttente, isVIP  FROM app_Utilisateur ORDER BY nom";
  //récupération de la connexion à la Base de donnée
  require 'WAC_DB.php';
  //on récupère les données de la base
  $crawler = $db->query($verification)
  
?>
