
<div class="content center" style="height:90%"><p><?php echo "Bienvenue " . $_SESSION['identifiant']; ?></p>
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
<h2><b>App</b>erture</h2>
<form action="r.php" autocomplete="off" method="get">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:100%;">
    <input class="mdl-textfield__input" type="text" id="sample3" name="champs">
    <label class="mdl-textfield__label" for="sample3">rechercher un logiciel, une personne, un service...</label>
  </div>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
  <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
  <span class="mdl-radio__label">logiciel</span>
  </label>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
  <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
  <span class="mdl-radio__label">utilisateur</span>
  </label>
  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
  <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="3">
  <span class="mdl-radio__label">éditeur</span>
  </label>
  <br>
  <button class="mdl-button mdl-js-button mdl-button--primary" style="margin:0 auto;">
    rechercher
  </button>
</form>
</div>
