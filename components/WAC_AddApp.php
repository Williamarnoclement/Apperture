<?php
$description = $_POST['description'];
$nom = $_POST['nom'];
$cle_editeur = $_POST['cle_editeur'];
echo $cle_editeur;
require "frameworks/WAC_DB.php";
$stmt = $db->prepare("INSERT INTO app_application (cle,nom,description,cle_editeur) VALUES (null,:nom,:description,:cle_editeur)");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':cle_editeur', $cle_editeur);
$stmt->execute();
$newURL = "ModoApp.php";
header('Location: '.$newURL);
?>
