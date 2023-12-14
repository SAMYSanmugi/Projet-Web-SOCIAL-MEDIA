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
   if ($erreur == "") {
      echo "Formulaire valide.";
   } else {
      echo "Erreur: <br>" . $erreur;
   }

   // Créer un objet SimpleXMLElement pour construire le fichier XML
   $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><cv></cv>');

   // Ajouter les éléments au fichier XML
   $xml->addChild('nom', $name);
   $xml->addChild('prenom', $fname);
   $xml->addChild('naissance', $birthday);
   $xml->addChild('adresse', $postale);
   $xml->addChild('telephone', $phone);
   $xml->addChild('mail', $email);
   $xml->addChild('profil', $profile);
   
   // Traitement des champs qui peuvent avoir plusieurs entrées
   if (!empty($comp)) {
      $competences = $xml->addChild('competences');
      foreach ($comp as $competence) {
         $competences->addChild('competence', $competence);
      }
   }

   $xml->addChild('interet', $int);

   if (!empty($languages)) {
      $langues = $xml->addChild('langues');
      foreach ($languages as $langue) {
         $langues->addChild('langue', $langue);
      }
   }

   if (!empty($exp)) {
      $experiences = $xml->addChild('experiences');
      foreach ($exp as $experience) {
         experiences->addChild('experience', $experience);
      }
   }

   if (!empty($forma)) {
      $formations = $xml->addChild('formations');
      foreach ($forma as $formation) {
         $formations->addChild('formation', $formation);
      }
   }


   // Enregistrez le fichier XML
   $xml->asXML('cv.xml');

   // Rediriger vers une page de confirmation ou toute autre action souhaitée
   header("Location: confirmation.html");
   exit();
?>
