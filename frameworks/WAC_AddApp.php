<?php
/**
 * Permet d'ajouter une Application métier dans la base de données
 *
 * Insertion dans la table app_application des données nécéssaires
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
$description = $_POST['description'];
$nom = $_POST['nom'];
$cle_editeur = $_POST['cle_editeur'];
$procedure = $_POST['procedure_'];
$emplacement = $_POST['emplacement'];
echo $cle_editeur;
require "frameworks/WAC_DB.php";
$stmt = $db->prepare("INSERT INTO app_application (cle,nom,description,cle_editeur,emplacement, procedure_) VALUES (null,:nom,:description,:cle_editeur,:emplacement,:procedure)");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':cle_editeur', $cle_editeur);
$stmt->bindParam(':procedure', $procedure);
$stmt->bindParam(':emplacement', $emplacement);
$stmt->execute();
$newURL = "ModoApp.php";
header('Location: '.$newURL);
?>
