<div class="content center">
  <h3>Interface de Modération des Directions</h3>
  <p>Liste des Directions</p>
  <!-- Colored FAB button -->
  <p><button class="mdl-button mdl-js-button mdl-button--fab mdl-color--orange-100 dialog-button" >
    <i class="material-icons">add</i>
  </button> Nouvelle direction</p>
  <!-- AFFICHAGE DES APPLICATIONS -->
  <?php require 'frameworks/WAC_GetAllDir.php'; ?>
  <?php foreach ($crawler_dir as $key): ?>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><?php echo $key['numero_dir'] ?> - <?php echo $key['nom']; ?></h2>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<dialog id="dialog" class="mdl-dialog">
  <h3 class="mdl-dialog__title">Ajouter une nouvelle Direction</h3>

  <form action="newDir.php" autocomplete="off" method="post">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="nom" required>
      <label class="mdl-textfield__label" for="sample3">Nom de la direction</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="numero_dir" required>
      <label class="mdl-textfield__label" for="sample3">Numéro de la direction</label>
    </div>
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
