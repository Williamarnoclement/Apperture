<div class="content center">
<h3>Interface de Modération des utilisateurs</h3>
<p>Liste des utilisateurs du logiciel Apperture</p>
<?php require 'frameworks/WAC_GetAllUsers.php'; ?>
<?php foreach ($crawler as $key): ?>
  <div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text"><?php echo $key['prenom']. " " . $key['nom']; ?></h2>
    </div>
    <p>identifiant : <?php echo $key['identifiant']; ?></p>
    <div class="mdl-card__supporting-text">
      <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="<?php echo $key['identifiant'] ; ?>-1">
        <input type="checkbox" id="<?php echo $key['identifiant'] ; ?>-1"" class="mdl-switch__input" onchange="check(this);" <?php if ($key['isAdmin'] == true) {
          echo "checked";
        } ?>
        >
        <span class="mdl-switch__label">Administrateur <?php if ($key['isAdmin'] == true) {
          echo "<b style='color:red;'>ATTENTION DANGER</b>";
        } ?></span>
      </label>
      <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="<?php echo $key['identifiant'] ; ?>-2">
        <input type="checkbox" id="<?php echo $key['identifiant'] ; ?>-2" class="mdl-switch__input" onchange="check(this);" <?php if ($key['isTechnicien'] == true) {
          echo "checked";
        } ?>
        >
        <span class="mdl-switch__label">Technicien</span>
      </label>
      <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="<?php echo $key['identifiant'] ; ?>-3">
        <input type="checkbox" id="<?php echo $key['identifiant'] ; ?>-3" class="mdl-switch__input" onchange="check(this);" <?php if ($key['isVIP'] == true) {
          echo "checked";
        } ?>
        >
        <span class="mdl-switch__label">VIP</span>
      </label>
      <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="<?php echo $key['identifiant'] ; ?>-4">
        <input type="checkbox" id="<?php echo $key['identifiant'] ; ?>-4" class="mdl-switch__input" onchange="check(this);" <?php if ($key['isEnAttente'] == true) {
          echo "checked";
        } ?>
        >
        <span class="mdl-switch__label">Utilisateur en attente</span>
      </label>
    </div>
  </div>
<?php endforeach; ?>
</div>
<script>
function check(ch){
  window.location.href = "<?php echo "switch.php" ;?>?switch="+ch.id;
}
</script>
