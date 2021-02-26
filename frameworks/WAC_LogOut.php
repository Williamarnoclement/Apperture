<?php
session_start();
session_destroy();
$newURL = "connexion.php";
header('Location: '.$newURL);
?>
