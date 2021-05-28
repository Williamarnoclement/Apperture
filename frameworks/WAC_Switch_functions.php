<?php
/**
 * Permet la récupération des données relatives aux switchs pour la modération des utilisateurs
 *
 * Fonctions usuelles permettant l'affichage et la modification des switchs (gestion des privilèges)
 *
 * PHP version 8.0.2
 *
 * @author    William-Arno Clément <wiyam@icloud.com>
 * @copyright 2021 Mairie de Vitry-sur-Seine
 */
 /**
 * Permet le changement de la valeur stockée dans l'utilisateur pour un statut (gestion des privilèges)
 *
 * @param  $identifiant_utilisateur clé primaire de l'utilisateur
 * @param  $valeur_switch 1 pour isAdmin, 2 pour isTechnicien,3 pour is VIP, 4 pour isEnAttente
 * @param  $valeur_actuelle valeur actuelle du switch
 *
 */
function switch_change($identifiant_utilisateur, $valeur_switch, $valeur_actuelle)
{
  require 'WAC_DB.php';
  if ($valeur_actuelle == "0") {
    $reverse = "1";
  } else {
    $reverse = "0";
  }
  if ($valeur_switch == "1") {
    $stmt = $db->prepare("UPDATE app_Utilisateur SET isAdmin=? WHERE identifiant=?");
    $stmt->execute([$reverse, $identifiant_utilisateur]);
  } elseif ($valeur_switch == "2") {
    $stmt = $db->prepare("UPDATE app_Utilisateur SET isTechnicien=? WHERE identifiant=?");
    $stmt->execute([$reverse, $identifiant_utilisateur]);
  } elseif ($valeur_switch == "3") {
    $stmt = $db->prepare("UPDATE app_Utilisateur SET isVIP=? WHERE identifiant=?");
    $stmt->execute([$reverse, $identifiant_utilisateur]);
  } elseif ($valeur_switch == "4") {
    $stmt = $db->prepare("UPDATE app_Utilisateur SET isEnAttente=? WHERE identifiant=?");
    $stmt->execute([$reverse, $identifiant_utilisateur]);
  }
  $newURL = "ModoUsr.php";
  header('Location: '.$newURL);
}
/**
* Permet la récupération de la valeur actuelle du switch
*
* @param  $identifiant_utilisateur clé primaire de l'utilisateur
* @param  $valeur_switch 1 pour isAdmin, 2 pour isTechnicien,3 pour is VIP, 4 pour isEnAttente
*
*/
function switch_get($identifiant_utilisateur, $valeur_switch)
{
  require 'WAC_DB.php';
  if ($valeur_switch == "1") {
    $verification =  "SELECT isAdmin FROM app_Utilisateur WHERE identifiant='$identifiant_utilisateur'";
    foreach  ($db->query($verification) as $row) {
      $valeur_actuelle = $row['isAdmin'];
    }
  } elseif ($valeur_switch == "2") {
    $verification =  "SELECT isTechnicien FROM app_Utilisateur WHERE identifiant='$identifiant_utilisateur'";
    foreach  ($db->query($verification) as $row) {
      $valeur_actuelle = $row['isTechnicien'];
    }
  } elseif ($valeur_switch == "3") {
    $verification =  "SELECT isVIP FROM app_Utilisateur WHERE identifiant='$identifiant_utilisateur'";
    foreach  ($db->query($verification) as $row) {
      $valeur_actuelle = $row['isVIP'];
    }
  } elseif ($valeur_switch == "4") {
    $verification =  "SELECT isEnAttente FROM app_Utilisateur WHERE identifiant='$identifiant_utilisateur'";
    foreach  ($db->query($verification) as $row) {
      $valeur_actuelle = $row['isEnAttente'];
    }
  }

    return $valeur_actuelle;
}

?>
