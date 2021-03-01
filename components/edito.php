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
</div>
