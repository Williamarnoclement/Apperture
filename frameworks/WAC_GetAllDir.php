<?php
$verification_direction =  "SELECT cle, nom, numero_dir FROM app_direction ORDER BY numero_dir";
//récupération de la connexion à la Base de donnée
require 'WAC_DB.php';
//on récupère les données de la base
$crawler_dir = $db->query($verification_direction);
?>
