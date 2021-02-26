<?php
session_start();
if (isset($_SESSION['identifiant'])) {
  require 'components/header.php';
  require 'components/home.php';
  require 'components/footer.php';
} else {
  require 'components/header.php';
  //require page de bienvenue
  require 'components/welcome.php';
  require 'components/footer.php';
}
?>
