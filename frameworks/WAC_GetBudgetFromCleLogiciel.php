<?php
function get_budget_from_cle_logiciel($cle_logiciel)
{
  $verification =  "SELECT cle, coutParAn FROM app_budget WHERE cle_logiciel='$cle_logiciel' LIMIT 1";
  //récupération de la connexion à la Base de donnée
  require 'WAC_DB.php';
  //on récupère les données de la base
  $crawler = $db->query($verification);
  //on retourne les données de l'application métier
  foreach ($crawler as $key){
  }
  if (isset($key)) {
    return $key;
  } else {
    return null;
  }
}
?>
