<?php
/**
 * Permet la récupération des données relatives aux applications
 *
 * Fonctions usuelles permettant l'affichage des applications
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
 /**
 * Permet la récupération des données des applications métiers à partir de la clé logiciel
 *
 * @param  $cle_logiciel La clé primaire de l'application métier
 *
 */
function get_app_info($cle_logiciel)
{
  $verification =  "SELECT a.cle, a.nom, a.description, a.cle_editeur,a.emplacement, a.procedure_, a.cle_editeur FROM app_application a WHERE cle='$cle_logiciel' LIMIT 1";
  //récupération de la connexion à la Base de donnée
  require 'WAC_DB.php';
  //on récupère les données de la base
  $crawler = $db->query($verification);
  //on retourne les données de l'application métier
  foreach ($crawler as $key){
  }
  return $key;
}
/**
* Permet la récupération ddu nom de l'éditeur à partir de sa clé
*
* @param  $cle_editeur clé primaire de l'éditeur
*
*/
function get_editeur_name($cle_editeur)
{
  $verification =  "SELECT cle, nom FROM app_editeur WHERE cle='$cle_editeur' LIMIT 1";
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
