<?php
/**
 * Permet la récupération de l'ensemble des données relatives aux directions
 *
 * Pour l'affichage de la liste des directions recensées dans Apperture
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
$verification_direction =  "SELECT cle, nom, numero_dir FROM app_direction ORDER BY numero_dir";
//récupération de la connexion à la Base de donnée
require 'WAC_DB.php';
//on récupère les données de la base
$crawler_dir = $db->query($verification_direction);
?>
