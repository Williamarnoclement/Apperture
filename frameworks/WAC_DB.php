<?php
/**
 * Permet de se connecter à la base de données
 *
 * Fournisseur de la connexion à la base de données
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
$user = "root";
$pass = "";
$db = new PDO('mysql:host=localhost;dbname=apperture', $user, $pass);
?>
