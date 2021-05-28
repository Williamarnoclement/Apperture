<?php
/**
 * Permet la récupération des données relatives aux budget
 *
 * Fonctions usuelles permettant l'affichage des budgets selon les applications
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
 /**
 * Permet la récupération des données des budgets à partir de la clé logiciel
 *
 * @param  $cle_logiciel La clé primaire de l'application métier
 *
 */
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
