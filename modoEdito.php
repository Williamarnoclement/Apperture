<?php
session_start();
if ($_SESSION['isAdmin'] == true) {
  include 'components/header.php';
  include 'components/allEditeurs.php';
  include 'components/footer.php';
} else {
  $newURL = "index.php";
  header('Location: '.$newURL);
}
?>
