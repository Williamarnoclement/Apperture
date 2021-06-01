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
$user = "";
$pass = "";
$db = new PDO("mysql:dbname=apperture;port=3306;host=localhost", $user, $pass);
?>
