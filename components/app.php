<?php
if (!isset($_GET['app'])) {
  $newURL = "homepage.php";
  header('Location: '.$newURL);
}
$cle_app = $_GET['app'];
require "frameworks/WAC_AppViewer.php";
$crawler = get_app_info($cle_app);
?>
<div class="content center" style="text-align:left;">
  <h2><?php echo $crawler['nom']; ?>  <button class="mdl-button mdl-js-button mdl-button--fab mdl-color--orange-100 dialog-button" >
    <i class="material-icons">create</i></h2>
  </button>
  <h3>Description</h3>
  <p><?php echo $crawler['description']; ?></p>
  <?php if ($_SESSION &&($_SESSION['isAdmin'] == true || $_SESSION['isTech'] == true)): ?>
    <h3>Fiche technique</h3>
    <p>Emplacement du logiciel: <a href="<?php echo $crawler['emplacement']; ?>"><?php echo $crawler['emplacement']; ?></a></p>
    <p>Emplacement de la procédure: <a href="<?php echo $crawler['procedure_']; ?>"><?php echo $crawler['procedure_']; ?></a></p>
  <?php endif; ?>
  <?php $crawl_editeur = get_editeur_name($crawler['cle_editeur']); ?>
  <h3>Informations</h3>
  <p>Le logiciel est édité par <b>l'éditeur</b> suivant: <a href="<?php echo 'editeur.php?editeur='.$crawl_editeur['cle']; ?>"><?php echo $crawl_editeur['nom']; ?></a></p>
  <p>Le logiciel est utilisé dans les <b>directions</b> suivantes:</p>
  <?php require 'frameworks/WAC_Lic_functions.php'; ?>
  <?php foreach (get_dir_from_app($crawler['cle']) as $k): ?>
    <p style="color:blue;"><?php echo $k['nom']; ?></p>
  <?php endforeach; ?>
  <?php require 'frameworks/WAC_GetBudgetFromCleLogiciel.php'; ?>
  <?php $k = get_budget_from_cle_logiciel($crawler['cle']); ?>
  <?php if (isset($k)): ?>
    <h3>Fiche budget</h3>
    <p>Le cout par an de la licence logiciel s'élève à <b><?php echo $k['coutParAn']; ?> euros.</b></p>
  <?php endif; ?>
  <?php if (!isset($k)): ?>
    <h3>Fiche budget (non complétée)</h3>
    <p>Le cout de la licence logiciel n'est pas déterminée.</p>
  <?php endif; ?>
</div>
<dialog id="dialog" class="mdl-dialog">
  <h3 class="mdl-dialog__title">Modifier une application existante</h3>

  <form action="changeApp.php" autocomplete="off" method="post">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="cle" value="<?php echo $crawler['cle']; ?>" readonly>
      <label class="mdl-textfield__label" for="sample3">Clé de l'application</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="nom" value="<?php echo $crawler['nom']; ?>" required>
      <label class="mdl-textfield__label" for="sample3">Nom de l'application</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="description" value="<?php echo $crawler['description']; ?>" required>
      <label class="mdl-textfield__label" for="sample3">Description</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="emplacement" value="<?php echo $crawler['emplacement']; ?>" required>
      <label class="mdl-textfield__label" for="sample3">Emplacement du logiciel</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="procedure_" value="<?php echo $crawler['procedure_']; ?>" required>
      <label class="mdl-textfield__label" for="sample3">Emplacement de la procédure</label>
    </div>
    <div class="mdl-card__actions mdl-card--border"  type="submit">
      <button class="mdl-button mdl-js-button">
        Modifier
      </button>
      <button type="button" class="mdl-button close-button">Annuler</button>
    </div>
  </form>
</dialog>
<script type="text/javascript">
(function() {
  'use strict';
  var dialogButton = document.querySelector('.dialog-button');
  var dialog = document.querySelector('#dialog');
  if (!dialog.showModal) {
    dialogPolyfill.registerDialog(dialog);
  }
  dialogButton.addEventListener('click', function() {
    dialog.showModal();
  });
  dialog.querySelector('.close-button')
  .addEventListener('click', function() {
    dialog.close();
  });
}());
</script>
