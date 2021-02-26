
<div class="content center"><p><?php echo "Bienvenue " . $_SESSION['identifiant']; ?></p>
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
<form action="#">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:100%;">
    <input class="mdl-textfield__input" type="text" id="sample3">
    <label class="mdl-textfield__label" for="sample3">rechercher un logiciel, une personne, un service...</label>
  </div>
  <button class="mdl-button mdl-js-button mdl-button--primary" style="margin:0 auto;">
    rechercher
  </button>
</form>
</div>
