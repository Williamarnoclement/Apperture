<?php
/**
 * Permet d'ajouter une Direction dans la base de données
 *
 * Insertion dans la table app_direction des données nécéssaires
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
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
