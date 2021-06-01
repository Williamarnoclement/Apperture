<?php
/**
 * Permet la récupération de l'ensemble des données relatives aux utilisateurs
 *
 * Pour l'affichage de la liste des utilisateurs recensés dans Apperture
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
  $verification =  "SELECT identifiant, nom, prenom, isAdmin, isTechnicien, isEnAttente, isVIP  FROM app_utilisateur ORDER BY nom";
  //récupération de la connexion à la Base de donnée
  require 'WAC_DB.php';
  //on récupère les données de la base
  $crawler = $db->query($verification)

?>
