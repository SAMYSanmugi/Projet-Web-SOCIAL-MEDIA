<?php  
	// récupérer les données du formulaire 
   $name = isset($_POST["nom"])? $_POST["nom"] : "";
   $fname = isset($_POST["prenom"])? $_POST["prenom"] : "";
   $birthday = isset($_POST["naissance"])? $_POST["naissance"] : "";
   $postale = isset($_POST["adresse"])? $_POST["adresse"] : "";
   $phone = isset($_POST["telephone"])? $_POST["telephone"] : "";
   $email = isset($_POST["mail"])? $_POST["mail"] : "";
   $profile = isset($_POST["profil"])? $_POST["profil"] : "";
   $comp = isset($_POST["competence"])? $_POST["competence"] : "";
   $int = isset($_POST["interet"])? $_POST["interet"] : "";
   $languages = isset($_POST["langues"])? $_POST["langues"] : "";
   $exp = isset($_POST["experience"])? $_POST["experience"] : "";
   $forma = isset($_POST["formation"])? $_POST["formation"] : "";
   $erreur = "";
   
   if ($name == "") {
   $erreur .= "Le champ Nom est vide. <br>";
   }
   if ($fname == "") {
   $erreur .= "Le champ Prénom est vide. <br>";
   }
   if ($birthday == "") {
      $erreur .= "Le champ Date de naissance est vide. <br>";
   }
   if ($postale == "") {
   $erreur .= "Le champ Adresse est vide. <br>";
   }
   if
   ($phone == "") {
      $erreur .= "Le champ Téléphone est vide. <br>";
   }
   if ($email == "") {
      $erreur .= "Le champ Adresse email est vide. <br>";
   }
   if ($profile == "") {
      $profile .= "Le champ Profile est vide. <br>";
   }
   if ($comp == "") {
      $comp .= "Le champ Competence est vide. <br>";
   }
   if ($int == "") {
      $int .= "Le champ Interet est vide. <br>";
   }
   if ($languages == "") {
      $languages .= "Le champ Langues est vide. <br>";
   }
   if ($exp == "") {
      $exp .= "Le champ Expérience est vide. <br>";
   }
   if ($forma == "") {
      $forma .= "Le champ Formation est vide. <br>";
   }
   if ($erreur == "") {
      echo "<td>$name</td>&nbsp&nbsp";
      echo "<td>$fname</td><br><br>";

      echo "Coordonnées :<br>";
      echo "<td>Date de naissance :&nbsp</td><td>$birthday</td><br>";
      echo "<td>Adresse :&nbsp</td><td>$postale</td><br>";
      echo "<td>Téléphone :&npsp</td><td>$phone</td><br>";
      echo "<td>Adresse-mail :&nbsp</td><td>$email</td><br><br><br>";

      echo "Profil :";
      echo "<td>$profile</td>";

      echo "Compétences :";
      echo "<td>$comp</td><br>";

      echo "Centres d'intérêt :";
      echo "<td>$int</td>";

      echo "Langues :";
      echo "<td>$languages</td>";

      echo "Expériece :";
      echo "<td>$exp</td>";

      echo "Formation :";
      echo "<td>$forma</td>";   
   } else {
      echo "Erreur: <br>" . $erreur;
   }

?>
