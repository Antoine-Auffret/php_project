<?php

  // Inclusion du fichier de configuration et de la classe Etudiant pour simplifier et éviter la redondance du code

  include 'config.php';
  include 'Etudiant.php';

  // Lien vers la page d'accueil

  echo '<a href="back.php">retour accueil</a>';

  // Création du formulaire pour ajouter un nouvel étudiant

  echo '<form method="post" action="post.php">';
    echo '<fieldset>';
      echo '<legend>Créer un nouvel étudiant</legend>';
      echo '<p>';
        echo 'Mail : '.'<input type="email" name="mail" />'."<br>";
        echo 'Nom : '.'<input type="text" name="nom" />'."<br>";
        echo 'Prenom : '.'<input type="text" name="prenom" />'."<br>";
        echo 'Date de naissance : '.'<input type="date" name="date_naissance" />'.' AAAA-MM-JJ'."<br>";
        echo 'Section : '.'<select name="section"><option value="CIR1">CIR1</option><option value="CIR2">CIR2</option></select>'."<br>";
        echo '<input type="submit" value="Valider" />';
      echo '</p>';
    echo '</fieldset>';
  echo '</form>';
