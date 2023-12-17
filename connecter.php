
<?php 
 //Nous allons démarrer la session avant toute chose
   session_start() ;
  if(isset($_POST['bouton-valider'])){ // Si on clique sur le boutton , alors :
    //Nous allons verifiér les informations du formulaire
    if(isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['pseudo'])) { //On verifie ici si l'utilisateur a rentré des informations
      //Nous allons mettres l'email et le mot de passe dans des variables
      $email = $_POST['email'] ;
      $mdp = $_POST['mdp'] ;
      $pseudo = $_POST['pseudo'] ;
      $erreur = "" ;
       //Nous allons verifier si les informations entrée sont correctes
       //Connexion a la base de données
       $nom_serveur = "localhost";
       $utilisateur = "root";
       $mot_de_passe ="";
       $nom_base_données ="form" ;
       $con = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
       //requete pour selectionner  l'utilisateur qui a pour email et mot de passe les identifiants qui ont été entrées
        $req = mysqli_query($con , "SELECT * FROM utilisateurs WHERE  pseudo ='$pseudo' AND email = '$email' AND mdp ='$mdp' ") ;
        $num_ligne = mysqli_num_rows($req) ;//Compter le nombre de ligne ayant rapport a la requette SQL
        if($num_ligne > 0){
            header("Location:index.php") ;//Si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
            // Nous allons créer une variable de type session qui vas contenir l'email de l'utilisateur
            $_SESSION['email'] = $email ;
        }else {//si non
            $erreur = "Adresse Mail ou Mot de passe incorrectes !";
        }
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styleco.css">
	<link rel="preconnect"  href="https://fonts.googleapis.com">
	<link rel="preconnect"  href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

</head>
<body>

	
	<section>


		<div class="imgBox"></div>
		<div class="contentBox">
			<div class="formBox">
				<img src="ece in logo final.png" alt="ECE logo" height="100" width="240" style="margin-top: 0px;"> </img><br><br><br><br>
				<h2> Se connecter</h2>
				<form action="#"   method="POST">
					<div class="inputBx">
						<span>Pseudo</span>
						<input type="text" name="pseudo">
					</div>
					<form action="#">
					<div class="inputBx">
						<span>Email</span>
						<input type="text" name="email">
					</div>
					<div class="inputBx">
						<span>Mot de Passe</span>
						<input type="password" name="mdp">
						
					</div>
					 <?php 
       					if(isset($erreur)){// si la variable $erreur existe , on affiche le contenu ;
          				 echo "<p class= 'Erreur'>".$erreur."</p>"  ;
      					 }
       					?>
					<div class="remember">
						<label><input type="checkbox">Se souvenir</label>
					</div>
					<div class="inputBx">
						<input type="submit" value="S'identifier" name="bouton-valider">
					</div>

					<div class="inputBx">
						<p>Nouveau sur ECE in?<a href="#">S'inscrire </p>
					</div>
					


				</form>
			</div>
		</div>


	</section>

</body>
</html>