<?php

  if ($_POST['identifiant'] == null) {
    $newURL = "../inscription.php?missIdentifiant";
    header('Location: '.$newURL);
  }else if ($_POST['nom'] == null) {
    $newURL = "../inscription.php?missNom";
    header('Location: '.$newURL);
  } else if ($_POST['mdp'] == null) {
    $newURL = "../inscription.php?missMotDePasse";
    header('Location: '.$newURL);
  } else if ($_POST['mdp2'] != $_POST['mdp']) {
    $newURL = "../inscription.php?noteSameMDP";
    header('Location: '.$newURL);
  } else {
    //récupération des données transmises dans le formulaire
    $identifiant = $_POST['identifiant'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];
    //récupération de la connexion à la Base de donnée
    require 'WAC_DB.php';
    //on vérifie si l'utilisateur est déjà dans la base de donnée
    $verification =  "SELECT identifiant FROM app_Utilisateur WHERE identifiant='$identifiant'";
    $incr = 0;
    foreach  ($db->query($verification) as $row) {
      $incr++;
    }
    if ($incr != 0) {
      if ($_POST['identifiant'] != 0) {
        $newURL = "../inscription.php?alreadyExist";
        header('Location: '.$newURL);
      }
    }
    //a partir d'ici, l'utilisateur est créé.
    $stmt = $db->prepare("INSERT INTO app_Utilisateur (cle,nom,prenom,identifiant,hash,salt) VALUES (null,:nom,:prenom,:identifiant,:hash,:salt)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':identifiant', $identifiant);
    $stmt->bindParam(':hash', $hash);
    $stmt->bindParam(':salt', $salt);
    //hashage du mot de passe
    $salt = "\$5\$rounds=5000\$" ."wac" . $prenom . $nom . "\$";
    $hash = crypt($mdp, $salt);
    //insertion de la ligne dans la base de donnéecho// insertion d'une ligne
    $stmt->execute();
    //Une fois créé, l'utilisateur se voit redirigé vers la page d'authenification
    $newURL = "../connexion.php";
    header('Location: '.$newURL);
  }

 ?>
