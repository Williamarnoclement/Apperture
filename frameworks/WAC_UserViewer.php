<?php
/**
 * Permet la récupération des données relatives aux utilisateurs
 *
 * Fonction usuelle permettant l'affichage des informations de l'utilisateur
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
 /**
 * Permet la récupération des données relatives à un utilisateur
 *
 * @param  $cle La clé primaire de l'utilisateur
 *
 */
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
