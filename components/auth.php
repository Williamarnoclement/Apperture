<?php require 'header.php'; ?>
    <main class="mdl-layout__content">
      <div class="content center">
        <div class="auth">
            <h3>S'authentifier</h3>
            <form action="./frameworks/WAC_Connect.php" method="post">
              <?php if (isset($_GET['incorrectCredentials'])) {
                 echo "<p>L'identifiant ou le mot de passe est incorrecte.</p>";
              } ?>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" name="identifiant">
                <label class="mdl-textfield__label" for="sample3" >Identifiant</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="password" name="mdp">
                <label class="mdl-textfield__label" for="sample3">Mot de passe</label>
              </div>
              <br>
              <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                <i class="material-icons">call_made</i>
              </button>
            </form>
        </div>

      </div>
    </main>
  <?php require 'footer.php'; ?>
