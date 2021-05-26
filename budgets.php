<?php
session_start();
if ($_SESSION['isAdmin'] == true || $_SESSION['isVIP'] == true) {
  include 'components/header.php';
  include 'components/allBudgets.php';
  include 'components/footer.php';
} else {
  $newURL = "index.php";
  header('Location: '.$newURL);
}
?>
