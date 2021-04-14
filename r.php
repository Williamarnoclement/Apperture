<?php
session_start();
$champs = $_GET['champs'];
$options = $_GET['options'];
include "components/resultats.php";
/**--------------------------------**/
// options 1 -> logiciel            //
// options 2 -> utilisateur         //
// options 3 -> éditeur             //
/**--------------------------------**/
include "components/header.php";
require 'components/loupe.php';
?>

<div class="mdl-layout__content content">
  <div class="mdl-grid">
      <?php if ($search_results != null): ?>
        <?php foreach ($search_results as $key): ?>
          <div class="mdl-shadow--2dp mdl-cell mdl-cell--4-col" style="height:200px;">
            <div class="mdl-card__title ">
              <h2 class="mdl-card__title-text"><a href="<?php
              if ($options == 1) {
                echo "viewApp.php?app=".$key['cle'];
              } elseif ($options == 2) {
                echo "viewUser.php?u=".$key['cle'];
              } elseif ($options == 3) {
                echo "editeur.php?editeur=".$key['cle'];
              }
              ?>"><?php echo $key['nom']; ?></a></h2>
            </div>
          </div>
        <?php endforeach; ?>
    </div>
  </div>

<?php endif;
include "components/footer.php";
?>
