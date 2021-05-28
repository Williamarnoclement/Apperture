<?php
/**
 * Permet d'ajouter une Licence dans la base de données
 *
 * Insertion dans la table app_licence des données nécéssaires
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
$app = $_POST['cle_logiciel'];
$dir = $_POST['cle_direction'];
require "frameworks/WAC_DB.php";
$stmt = $db->prepare("INSERT INTO app_licence (cle,cle_logiciel,cle_direction,debut_licence) VALUES (null,:app,:dir,CURRENT_TIMESTAMP)");
$stmt->bindParam(':app', $app);
$stmt->bindParam(':dir', $dir);
$stmt->execute();
$newURL = "modoLic.php";
header('Location: '.$newURL);
?>
