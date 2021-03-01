<?php
session_start();
if ($_SESSION['isAdmin'] == true) {
  require "frameworks/WAC_AddApp.php";
} else {
  $newURL = "index.php";
  header('Location: '.$newURL);
}
?>
