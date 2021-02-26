<?php
$verification =  "SELECT nom, description FROM app_application ORDER BY nom";
//récupération de la connexion à la Base de donnée
require 'WAC_DB.php';
//on récupère les données de la base
$crawler = $db->query($verification)
?>
