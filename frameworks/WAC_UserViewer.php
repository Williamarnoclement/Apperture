<?php
function get_user_info($cle)
{
  $verification =  "SELECT cle, nom, prenom FROM app_utilisateur WHERE cle='$cle' LIMIT 1";
  //récupération de la connexion à la Base de donnée
  require 'WAC_DB.php';
  //on récupère les données de la base
  $crawler = $db->query($verification);
  //on retourne les données de l'application métier
  foreach ($crawler as $key){
  }
  return $key;
}
?>
