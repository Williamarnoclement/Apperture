<?php
  require 'frameworks/WAC_Switch_functions.php';
  list($identifiant_utilisateur, $valeur_switch) = explode("-", $_GET['switch']);
  //echo $identifiant_utilisateur.$valeur_switch;
  $valeur_actuelle = switch_get($identifiant_utilisateur, $valeur_switch);
  switch_change($identifiant_utilisateur, $valeur_switch, $valeur_actuelle);
?>
