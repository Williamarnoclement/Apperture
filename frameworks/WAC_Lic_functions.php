<?php
/**
 * Permet la récupération des données relatives aux licences
 *
 * Fonctions usuelles permettant l'affichage des licences
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
 /**
 * Permet la récupération des données des applications métiers à partir de la clé primaire de la direction
 *
 * @param  $dir La clé primaire de la direction
 *
 */
function get_apps_from_dir($dir){
  require 'WAC_DB.php';
  $query =  "SELECT app_application.cle AS cle, app_application.nom AS nom FROM app_application, app_licence WHERE app_application.cle=app_licence.cle_logiciel AND app_licence.cle_direction='$dir';";
  return $db->query($query);
}
/**
* Permet la récupération des données des licences à partir de la clé primaire de l'application métiers
*
* @param  $dir La clé primaire de l'application métiers
*
*/
function get_dir_from_app($app){
  require 'WAC_DB.php';
  $query =  "SELECT app_direction.cle AS cle, app_direction.nom AS nom, app_direction.numero_dir AS numero FROM app_direction, app_licence WHERE app_direction.cle=app_licence.cle_direction AND app_licence.cle_logiciel='$app';";
  return $db->query($query);
}
?>
