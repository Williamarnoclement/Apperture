<?php
/**
 * Permet la récupération des données relatives aux éditeurs
 *
 * Fonctions usuelles permettant l'affichage des éditeurs
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
 /**
 * Permet la récupération des données des éditeurs à partir de la clé logiciel
 *
 * @param  $cle_logiciel La clé primaire de l'application métier
 *
 */
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
/**
* Permet la récupération des données des applications métiers à partir de la clé éditeur
*
* @param  $cle_editeur La clé primaire de l'éditeur
*
*/
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
