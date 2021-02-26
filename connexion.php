<?php
session_start();
if (isset($_SESSION['identifiant'])) {
  require 'components/header.php';
  require 'components/home.php';
  require 'components/footer.php';
} else {
  require 'components/auth.php';
}
?>
