<?php
function get_apps_from_dir($dir){
  require 'WAC_DB.php';
  $query =  "SELECT app_application.cle AS cle, app_application.nom AS nom FROM app_application, app_licence WHERE app_application.cle=app_licence.cle_logiciel AND app_licence.cle_direction='$dir';";
  return $db->query($query);
}

function get_dir_from_app($app){
  require 'WAC_DB.php';
  $query =  "SELECT app_direction.cle AS cle, app_direction.nom AS nom, app_direction.numero_dir AS numero FROM app_direction, app_licence WHERE app_direction.cle=app_licence.cle_direction AND app_licence.cle_logiciel='$app';";
  return $db->query($query);
}
?>
