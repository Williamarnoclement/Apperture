<?php
function get_editeur_info($cle_editeur)
{
  $verification =  "SELECT cle, nom, site_internet, mail FROM app_editeur WHERE cle='$cle_editeur' LIMIT 1";
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
