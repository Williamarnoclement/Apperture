<?php
$site = $_POST['site'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$contact = $_POST['contact'];
$telephone = $_POST['telephone'];
$contrat = $_POST['contrat'];
echo $cle_editeur;
require "frameworks/WAC_DB.php";
$stmt = $db->prepare("INSERT INTO app_editeur (cle,nom,site_internet,mail,telephone,interlocuteur,numero_contrat) VALUES (null,:nom,:site,:mail,:telephone,:contact,:contrat)");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':site', $site);
$stmt->bindParam(':mail', $mail);
$stmt->bindParam(':contact', $contact);
$stmt->bindParam(':telephone', $telephone);
$stmt->bindParam(':contrat', $contrat);
$stmt->execute();
$newURL = "ModoEdito.php";
header('Location: '.$newURL);
?>
