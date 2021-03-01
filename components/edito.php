<?php
if (!isset($_GET['editeur'])) {
  $newURL = "homepage.php";
  header('Location: '.$newURL);
}
$cle_editeur = $_GET['editeur'];
require "frameworks/WAC_GetEditeurViewer.php";
$crawler = get_editeur_info($cle_editeur);
?>
<div class="content center">
  <h2><?php echo $crawler['nom']; ?></h2>
  <p>Le site de <b>l'éditeur</b> est le suivant: <?php echo $crawler['site_internet']; ?> .</p>
  <p>Le mail de contact de l'éditeur est le suivant: <?php echo $crawler['mail']; ?></p>
  <?php $variable = get_app_from_editeur($cle_editeur) ?>
  <?php if ($variable != null): ?>
    <?php echo "<p>Vous trouverez ci-dessous la liste des Applications métiers éditées par ".$crawler['nom'].":</p>"; ?>
    <?php foreach ($variable as $key): ?>
      <p><a href="<?php echo $key['cle']; ?>"><?php echo $key['nom']; ?></a></p>
    <?php endforeach; ?>
  <?php endif; ?>
</div>
