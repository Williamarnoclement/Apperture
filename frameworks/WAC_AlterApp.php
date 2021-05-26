<?php
$description = $_POST['description'];
$nom = $_POST['nom'];
$cle = $_POST['cle'];
$procedure = $_POST['procedure_'];
$emplacement = $_POST['emplacement'];
echo $cle."<br>";
require "frameworks/WAC_DB.php";
//$stmt = $db->prepare("INSERT INTO app_application (cle,nom,description,cle_editeur,emplacement, procedure_) VALUES (null,:nom,:description,:cle_editeur,:emplacement,:procedure)");
$stmt = $db->query("UPDATE app_application SET nom='".$nom."', description='".$description."', procedure_='".$procedure."', emplacement='".$emplacement."' WHERE cle='".$cle."';");
$stmt->execute();
echo $stmt->rowCount() . " records UPDATED successfully";
$newURL = "viewApp.php?app=".$cle;
header('Location: '.$newURL);
?>
