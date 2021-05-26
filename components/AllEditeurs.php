<div class="content center">
  <h3>Interface de Modération des Editeurs</h3>
  <p>Liste des Editeurs dans logiciel Apperture</p>
  <!-- Colored FAB button -->
  <p><button class="mdl-button mdl-js-button mdl-button--fab mdl-color--orange-100 dialog-button" >
    <i class="material-icons">add</i>
  </button> Nouvel éditeur</p>
  <!-- AFFICHAGE DES APPLICATIONS -->
  <?php require 'frameworks/WAC_GetAllEditeurs.php'; ?>
  <?php foreach ($crawler_editeurs as $key): ?>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><a href="<?php echo "editeur.php?editeur=".$key['cle']; ?>"><?php echo $key['nom']; ?></a></h2>
      </div>
      <div class="mdl-card__supporting-text">
        <p>Le site support de l'éditeur est : <b><a href="<?php echo $key['site_internet']; ?>"><?php echo $key['site_internet']; ?></a></b></p>
        <p>Le mail de contact est le suivant: <b><?php echo $key['mail']; ?></b></p>
        <p>Interlocuteur chez l'éditeur: <b><?php echo $key['interlocuteur']; ?></b></p>
        <p>Téléphone éditeur: <b><?php echo $key['telephone']; ?></b></p>
        <p>Numéro de contrat maintenance: <b><?php echo $key['numero_contrat']; ?></b></p>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<dialog id="dialog" class="mdl-dialog">
  <h3 class="mdl-dialog__title">Ajouter une nouvelle fiche éditeur</h3>

  <form action="newEditeur.php" autocomplete="off" method="post">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="nom" required>
      <label class="mdl-textfield__label" for="sample3">Nom de l'éditeur</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="site" required>
      <label class="mdl-textfield__label" for="sample3">site web support</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="mail" required>
      <label class="mdl-textfield__label" for="sample3">e-mail SAV</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="contact" required>
      <label class="mdl-textfield__label" for="sample3">Interlocuteur chez l'éditeur</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="telephone" required>
      <label class="mdl-textfield__label" for="sample3">Téléphone</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="text" name="contrat" required>
      <label class="mdl-textfield__label" for="sample3">Contrat de maintenance</label>
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
