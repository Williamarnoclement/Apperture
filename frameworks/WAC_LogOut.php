<?php
/**
 * Permet la deconnexion de l'utilisateur au service d'Apperture
 *
 * Détruit la session et les cookies affiliés
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
session_start();
session_destroy();
$newURL = "connexion.php";
header('Location: '.$newURL);
?>
