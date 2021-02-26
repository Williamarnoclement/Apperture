<?php require 'header.php'; ?>
    <main class="mdl-layout__content">
      <div class="content center">
        <div class="auth">
            <h3>S'inscrire</h3>
            <form action="./frameworks/WAC_SignUp.php" method="post">
              <?php if (isset($_GET['missIdentifiant'])) {
                 echo "<p>L'identifiant ne peut pas être vide.</p>";
              } ?>
              <?php if (isset($_GET['alreadyExist'])) {
                 echo "<p>L'identifiant fournit existe déjà.</p>";
              } ?>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="identifiant">
                <label class="mdl-textfield__label" for="sample3" >Identifiant</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="prenom">
                <label class="mdl-textfield__label" for="sample3" >Prénom</label>
              </div>
              <?php if (isset($_GET['missNom'])) {
                 echo "<p>Le nom ne peut pas être vide.</p>";
              } ?>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="nom">
                <label class="mdl-textfield__label" for="sample3" >Nom</label>
              </div>
              <?php if (isset($_GET['missMotDePasse'])) {
                 echo "<p>Le mot de passe ne peut pas être vide.</p>";
              } ?>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" name="mdp">
                <label class="mdl-textfield__label" for="sample3">Mot de passe</label>
              </div>
              <?php if (isset($_GET['noteSameMDP'])) {
                 echo "<p>Le mot de passe n'est pas identique.</p>";
              } ?>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" name="mdp2">
                <label class="mdl-textfield__label" for="sample3">Retapez votre mot de passe</label>
              </div>
              <br>
              <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                <i class="material-icons">add</i>
              </button>
            </form>
        </div>

      </div>
    </main>
  <?php require 'footer.php'; ?>
