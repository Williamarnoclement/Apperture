<div class="content center">
  <h3>Interface de Modération des licences</h3>
  <p>Liste des licences</p>
  <!-- Colored FAB button -->
  <p><button class="mdl-button mdl-js-button mdl-button--fab mdl-color--orange-100 dialog-button" >
    <i class="material-icons">add</i>
  </button> Nouvelle Licence (indiquez quelle direction utilise quelle Application métier)</p>
  <!-- AFFICHAGE DES APPLICATIONS -->
  <?php require 'frameworks/WAC_GetAllDir.php'; ?>
  <?php foreach ($crawler_dir as $key): ?>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><?php echo $key['nom']; ?></h2>
      </div>
      <?php require 'frameworks/WAC_Lic_functions.php'; ?>
      <?php foreach (get_apps_from_dir($key['cle']) as $k): ?>
        <div class="mdl-card__supporting-text">
          <?php echo $k['nom']; ?>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</div>

<dialog id="dialog" class="mdl-dialog">
  <h3 class="mdl-dialog__title">Ajouter une nouvelle licence</h3>

  <form action="newLic.php" autocomplete="off" method="post">
    <?php require "frameworks/WAC_GetAllDir.php"; ?>
    <mat-form-field appearance="fill">
      <mat-label>Direction</mat-label>
      <select required name="cle_direction">
        <?php foreach ($crawler_dir as $e): ?>
          <option value="<?php echo $e['cle']; ?>"><?php echo $e['nom']; ?></option>
        <?php endforeach; ?>
        <!--<option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>-->
      </select>
    </mat-form-field>
    <?php require "frameworks/WAC_GetAllApps.php"; ?>
    <mat-form-field appearance="fill">
      <mat-label>Application</mat-label>
      <select required name="cle_logiciel">
        <?php foreach ($crawler as $e): ?>
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
