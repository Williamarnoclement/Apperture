<?php
if (!isset($_GET['app'])) {
  $newURL = "homepage.php";
  header('Location: '.$newURL);
}
$cle_app = $_GET['app'];
require "frameworks/WAC_AppViewer.php";
$crawler = get_app_info($cle_app);
?>
<div class="content center">
  <h2><?php echo $crawler['nom']; ?></h2>
  <p><?php echo $crawler['description']; ?></p>
  <?php $crawl_editeur = get_editeur_name($crawler['cle_editeur']); ?>
  <p>Le logiciel est édité par <b>l'éditeur</b> suivant: <a href="<?php echo 'editeur.php?editeur='.$crawl_editeur['cle']; ?>"><?php echo $crawl_editeur['nom']; ?></a></p>
  <p>Le logiciel est utilisé dans les <b>directions</b> suivantes:</p>
  <?php require 'frameworks/WAC_Lic_functions.php'; ?>
  <?php foreach (get_dir_from_app($crawler['cle']) as $k): ?>
    <p style="color:blue;"><?php echo $k['nom']; ?></p>
  <?php endforeach; ?>
</div>
