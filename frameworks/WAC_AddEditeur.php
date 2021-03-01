<?php
$site = $_POST['site'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
echo $cle_editeur;
require "frameworks/WAC_DB.php";
$stmt = $db->prepare("INSERT INTO app_editeur (cle,nom,site_internet,mail) VALUES (null,:nom,:site,:mail)");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':site', $site);
$stmt->bindParam(':mail', $mail);
$stmt->execute();
$newURL = "ModoEdito.php";
header('Location: '.$newURL);
?>
