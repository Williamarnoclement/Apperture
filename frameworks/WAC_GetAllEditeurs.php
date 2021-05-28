<?php
/**
 * Permet la récupération de l'ensemble des données relatives aux éditeurs
 *
 * Pour l'affichage de la liste des éditeurs recensés dans Apperture
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
$verification_editeur =  "SELECT cle, nom, site_internet, mail, telephone, interlocuteur, numero_contrat FROM app_editeur ORDER BY nom";
//récupération de la connexion à la Base de donnée
require 'WAC_DB.php';
//on récupère les données de la base
$crawler_editeurs = $db->query($verification_editeur);
?>
