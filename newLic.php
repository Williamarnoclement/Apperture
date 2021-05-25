<?php
session_start();
if ($_SESSION['isAdmin'] == true) {
  require "frameworks/WAC_AddLic.php";
} else {
  $newURL = "modoLic.php";
  header('Location: '.$newURL);
}
?>
