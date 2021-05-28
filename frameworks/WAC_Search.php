<?php
/**
 * Permet la récupération des résultats de recherche
 *
 * Fonctions usuelles permettant l'affichage des résultats de recherche
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
 /**
 * Permet la récupération des données à partir de la recherche et de son type
 *
 * @param  $termes_recherche chaine de caractères entrée par l'utilisateur
 * @param  $type_recherche le type de la recherche, 1 pour les applications, 2 pour utilisateur et 3 pour éditeur
 *
 */
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
