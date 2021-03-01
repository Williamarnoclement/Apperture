<?php
if (!isset($_GET['u'])) {
  $newURL = "homepage.php";
  header('Location: '.$newURL);
}
$cle_user = $_GET['u'];
require "frameworks/WAC_UserViewer.php";
$crawler = get_user_info($cle_user);
?>
<div class="content center">
  <h3><?php echo $crawler['prenom']." ".$crawler['nom']; ?></h3>
</div>
