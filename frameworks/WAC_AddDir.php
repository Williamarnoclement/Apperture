<?php
$numero = $_POST['numero_dir'];
$nom = $_POST['nom'];
require "frameworks/WAC_DB.php";
$stmt = $db->prepare("INSERT INTO app_direction (cle,nom,numero_dir,id_directeur) VALUES (null,:nom,:numero,0)");
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':numero', $numero);
$stmt->execute();
$newURL = "modoDir.php";
header('Location: '.$newURL);
?>
