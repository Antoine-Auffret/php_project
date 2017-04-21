<?php

  // Inclusion du fichier de configuration pour simplifier et éviter la redondance du code

  include 'config.php';

  // Récupération du mail, du nom, du prénom, de la date de naissance et de la classe de l'étudiant lors de l'envoi du formulaire

  $mail_etudiant = $_POST['mail'];
  $nom_etudiant = $_POST['nom'];
  $prenom_etudiant = $_POST['prenom'];
  $date_etudiant = $_POST['date_naissance'];
  $section_etudiant = $_POST['section'];

  // Lien vers la page d'accueil

  echo '<a href="back.php">retour accueil</a>';

  print("<center>Bonjour $prenom_etudiant </center>");

  // Insertion d'un nouvel étudiant dans la base de données

  $insert = $pdo->prepare("INSERT INTO etudiant(mail, nom, prenom, date_naissance, section) VALUES(:mail,:nom,:prenom,:date_naissance,:section)");

  if($insert->execute(array(':mail'=>$mail_etudiant,':nom'=>$nom_etudiant,':prenom'=>$prenom_etudiant,':date_naissance'=>$date_etudiant,':section'=>$section_etudiant))){
    echo "Insertion de $mail_etudiant dans la base de données réussie";
  }
  else{
    echo "Problème lors de l'insertion de $mail_etudiant dans la base de données";
  }

  unset($pdo);
