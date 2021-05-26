<?php
session_start();
if ($_SESSION['isAdmin'] == true) {
  require "frameworks/WAC_AlterApp.php";
} else {
  $newURL = "index.php";
  header('Location: '.$newURL);
}
?>
