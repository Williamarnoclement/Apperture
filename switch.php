<?php
session_start();
if ($_SESSION['isAdmin'] == true) {
  require 'components/switch.php';
} else {
  $newURL = "index.php";
  header('Location: '.$newURL);
}?>
