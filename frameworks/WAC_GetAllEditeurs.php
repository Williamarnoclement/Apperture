<?php
$verification_editeur =  "SELECT cle, nom, site_internet, mail, telephone, interlocuteur, numero_contrat FROM app_editeur ORDER BY nom";
//récupération de la connexion à la Base de donnée
require 'WAC_DB.php';
//on récupère les données de la base
$crawler_editeurs = $db->query($verification_editeur);
?>
