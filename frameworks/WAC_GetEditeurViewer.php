<?php
function get_editeur_info($cle_editeur)
{
  $verification =  "SELECT cle, nom, site_internet, mail, telephone, interlocuteur, numero_contrat FROM app_editeur WHERE cle='$cle_editeur' LIMIT 1";
  //récupération de la connexion à la Base de donnée
  require 'WAC_DB.php';
  //on récupère les données de la base
  $crawler = $db->query($verification);
  //on retourne les données de l'application métier
  foreach ($crawler as $key){
  }
  return $key;
}
function get_app_from_editeur($cle_editeur)
{
  $verification =  "SELECT cle, nom FROM app_application WHERE cle_editeur='$cle_editeur'";
  //récupération de la connexion à la Base de donnée
  require 'WAC_DB.php';
  //on récupère les données de la base
  $crawler = $db->query($verification);
  return $crawler;
}
?>
