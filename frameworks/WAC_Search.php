<?php
function search($termes_recherche, $type_recherche)
{
  if ($type_recherche == 1) {
    $verification =  "SELECT cle, nom FROM app_application WHERE nom LIKE '%{$termes_recherche}%'";
  } elseif ($type_recherche == 2) {
    $verification =  "SELECT cle, nom FROM app_utilisateur WHERE nom LIKE '%{$termes_recherche}%'";
  } elseif ($type_recherche == 3) {
    $verification =  "SELECT cle, nom FROM app_editeur WHERE nom LIKE '%{$termes_recherche}%'";
  }
  //récupération de la connexion à la Base de donnée
  require 'WAC_DB.php';
  //on récupère les données de la base
  $crawler = $db->query($verification);
  return $crawler;
}
?>
