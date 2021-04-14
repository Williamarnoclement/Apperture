
<div class="content center">
<p>Votre compte est <?php if ($_SESSION['isAdmin'] == true) {
  echo "de grade administrateur.";
}
if ($_SESSION['isTech'] == true) {
  echo "de grade technicien informatique.";
}
if ($_SESSION['isWait'] == true) {
  echo "en attente de validation par un administrateur. Vous pouvez uniquement consulter la base Apperture.";
}
if ($_SESSION['isVIP'] == true) {
  echo "de grade utilisateur important.";
}
if ($_SESSION['isWait'] == false) {
  echo "validé.";
}
?></p>
</div>
