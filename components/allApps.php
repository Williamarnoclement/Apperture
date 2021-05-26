<div class="content center">
  <h3>Interface de Modération des applications</h3>
  <p>Liste des applications du logiciel Apperture</p>
  <!-- Colored FAB button -->
  <p><button class="mdl-button mdl-js-button mdl-button--fab mdl-color--orange-100 dialog-button" >
    <i class="material-icons">add</i>
  </button> Nouvelle Application</p>
  <!-- AFFICHAGE DES APPLICATIONS -->
  <?php require 'frameworks/WAC_GetAllApps.php'; ?>
  <?php foreach ($crawler as $key): ?>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><a href="<?php echo "viewApp.php?app=".$key['cle']; ?>"><?php echo $key['nom']; ?></a></h2>
      </div>
      <div class="mdl-card__supporting-text">
        <p><?php echo $key['description']; ?></p>
        <?php if ($_SESSION &&($_SESSION['isAdmin'] == true || $_SESSION['isTech'] == true)): ?>
          <p>Emplacement du logiciel: <a href="<?php echo $key['emplacement']; ?>"><?php echo $key['emplacement']; ?></a></p>
          <p>Emplacement de la procédure: <a href="<?php echo $key['procedure_']; ?>"><?php echo $key['procedure_']; ?></a></p>
        <?php endif; ?>

      </div>
    </div>
  <?php endforeach; ?>
</div>

<dialog id="dialog" class="mdl-dialog">
  <h3 class="mdl-dialog__title">Ajouter une nouvelle application</h3>

  <form action="newApp.php" autocomplete="off" method="post">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="nom" required>
      <label class="mdl-textfield__label" for="sample3">Nom de l'application</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="description" required>
      <label class="mdl-textfield__label" for="sample3">Description</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="emplacement" required>
      <label class="mdl-textfield__label" for="sample3">Emplacement du logiciel</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="procedure_" required>
      <label class="mdl-textfield__label" for="sample3">Emplacement de la procédure</label>
    </div>
    <?php require "frameworks/WAC_GetAllEditeurs.php"; ?>
    <mat-form-field appearance="fill">
      <mat-label>Editeur</mat-label>
      <select required name="cle_editeur">
        <?php foreach ($crawler_editeurs as $e): ?>
          <option value="<?php echo $e['cle']; ?>"><?php echo $e['nom']; ?></option>
        <?php endforeach; ?>
        <!--<option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>-->
      </select>
    </mat-form-field>
    <div class="mdl-card__actions mdl-card--border"  type="submit">
      <button class="mdl-button mdl-js-button">
        Ajouter
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
