<div class="content center">
<h3>Interface de Modération des applications</h3>
<p>Liste des applications du logiciel Apperture</p>
<!-- Colored FAB button -->
<p><button class="mdl-button mdl-js-button mdl-button--fab mdl-color--orange-100">
  <i class="material-icons">add</i>
</button> Nouvelle Application</p>
<!-- AFFICHAGE DES APPLICATIONS -->
<?php require 'frameworks/WAC_GetAllApps.php'; ?>
<?php foreach ($crawler as $key): ?>
  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text"><?php echo $key['nom'] ?></h2>
    </div>
    <div class="mdl-card__supporting-text">
      <?php echo $key['description'] ?>
    </div>
  </div>
<?php endforeach; ?>
</div>
