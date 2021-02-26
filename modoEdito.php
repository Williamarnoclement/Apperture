<?php
session_start();
if ($_SESSION['isAdmin'] == true) {
  echo "Work in Progress.";
} else {
  $newURL = "index.php";
  header('Location: '.$newURL);
}
?>
