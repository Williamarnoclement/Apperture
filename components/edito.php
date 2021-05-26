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
  <p>Le site <b>support</b> de <b>l'éditeur</b> est le suivant: <a href="<?php echo $crawler['site_internet']; ?>"><?php echo $crawler['site_internet']; ?></a> .</p>
  <p>Le mail de contact de l'éditeur est le suivant: <?php echo $crawler['mail']; ?></p>
  <p>Interlocuteur chez l'éditeur: <b><?php echo $crawler['interlocuteur']; ?></b></p>
  <p>Téléphone éditeur: <b><?php echo $crawler['telephone']; ?></b></p>
  <p>Numéro de contrat maintenance: <b><?php echo $crawler['numero_contrat']; ?></b></p>
  <?php $variable = get_app_from_editeur($cle_editeur) ?>
  <?php if ($variable != null): ?>
    <?php echo "<p>Vous trouverez ci-dessous la liste des Applications métiers éditées par ".$crawler['nom'].":</p>"; ?>
    <?php foreach ($variable as $key): ?>
      <p><a href="<?php echo "viewApp.php?app=".$key['cle']; ?>"><?php echo $key['nom']; ?></a></p>
    <?php endforeach; ?>
  <?php endif; ?>
</div>
