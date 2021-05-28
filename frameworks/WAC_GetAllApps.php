<?php
/**
 * Permet la récupération de l'ensemble des données relatives aux applications
 *
 * Pour l'affichage de la liste des applications recensées dans Apperture
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
$verification =  "SELECT cle, nom, description,emplacement, procedure_, cle_editeur FROM app_application ORDER BY nom";
//récupération de la connexion à la Base de donnée
require 'WAC_DB.php';
//on récupère les données de la base
$crawler = $db->query($verification);
?>
