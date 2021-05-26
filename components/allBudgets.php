<div class="content center">
  <h3>Interface dédiée au budget</h3>
  <p>Liste des applications du logiciel Apperture</p>
  <!-- AFFICHAGE DES APPLICATIONS -->
  <?php require 'frameworks/WAC_GetAllApps.php'; ?>
  <?php require 'frameworks/WAC_GetBudgetFromCleLogiciel.php'; ?>
  <?php foreach ($crawler as $key): ?>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text"><a href="<?php echo "viewApp.php?app=".$key['cle']; ?>"><?php echo $key['nom']; ?></a></h2>
      </div>
      <div class="mdl-card__supporting-text">
        <?php $k = get_budget_from_cle_logiciel($key['cle']); ?>
        <?php if (isset($k)): ?>
          <p>Le cout par an de la licence logiciel s'élève à <b><?php echo $k['coutParAn']; ?> euros.</b></p>
        <?php endif; ?>
        <?php if (!isset($k)): ?>
          <p>Le cout de la licence logiciel n'est pas déterminée.</p>
        <?php endif; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
