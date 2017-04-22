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

  print("<center>Bonjour $mail_etudiant </center>");

  // Mise à jour des informations d'un étudiant dans la base de données et prépare la requête pour lutter contre l'injection de SQL

  $update = $pdo->prepare("UPDATE etudiant SET mail=:mail, nom=:nom, prenom=:prenom, date_naissance=:date_naissance, section=:section WHERE mail=:mail");

  if($update->execute(array(':mail'=>$mail_etudiant,':nom'=>$nom_etudiant,':prenom'=>$prenom_etudiant,':date_naissance'=>$date_etudiant,':section'=>$section_etudiant))){
    echo "Modification des informations de $mail_etudiant réussie";
  }
  else{
    echo "Problème lors de la modification de $mail_etudiant dans la base de données";
  }

  unset($pdo);