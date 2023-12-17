<head>
	<title>ECE in : Social media Professionnel de l'ECE Paris</title>
	<meta charset="utf-8" />
	<link href="emplois.css" rel="stylesheet" type="text/css"/>
	<link href="MiseEnPage.css" rel="stylesheet" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript"src="emplois.js"></script>
	<link rel="icon" type="image/vnd.icon" href="favicon.ico">
</head>
<body>
	<div id="nav1">
		<img div="logo" id="logo" src="miseenpage/ece in logo final.png" alt="ECE logo" height="100" width="240"></img>
		<br>
		<div id="nav">
		 	<a href="accueil.html"><img src="miseenpage/bouton accueil.png" alt="Accueil" id= "icone"></a>
		 	<a href="mon reseau.html"><img src="miseenpage/bouton mon reseau.png" alt="Mon Reseau" id= "icone"></a>
		 	<a href="vous.html"><img src="miseenpage/bouton vous.png" alt="Vous" id= "icone"></a>
		 	<a href="notifications.html"><img src="miseenpage/bouton notifications.png" alt="Notifications" id= "icone"></a>
		 	<a href="messagerie.html"><img src="miseenpage/bouton messagerie.png" alt="Messagerie" id= "icone"></a>
		 	<a href="emplois.php"><img src="miseenpage/bouton emplois.png" alt="Emplois" id= "icone"></a>
		</div>
		<h2>Emplois</h2>
		<form action="actionemplois.html" method="post">
			<input class="button" type="submit" value="Modifier" style="width: auto; float: right; margin-right: 20px;">
		</form>
		<br>
		
	</div>

	
	
	<?php
	//identifier votre BDD
		$database = "ecein";

		//connectez-vous de la BDD
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);

		$sql = "SELECT * FROM emplois";
		$result = mysqli_query($db_handle, $sql);

		echo "<div id=leftcolumn class=Emplois>";

		//afficher les résultats
		while ($data = mysqli_fetch_assoc($result)) {
			$emplois = "emplois" . $data['id'];
			echo "<div id=Emplois_element class=$emplois><dl>";
				$image = $data['image'];
				echo "<dt>" . "<img src='$image' height='120' width='100'>" . "</dt>";
					echo "<dd><h3>" . $data['titre'] . "</h3></dd>";
					echo "<dd>" . $data['nomentreprise'] . "</dd>";
					echo "<dd>" . $data['adresse'] . "</dd></dl></div>";
		}
		echo "</div>";

		$sql = "SELECT * FROM emplois";
		$result = mysqli_query($db_handle, $sql);

		echo "<div id=rightcolumn class=Details>";
		echo "<div class=info>
			<h3>Détails</h3>
		    <p>Dans cette page, vous allez trouver toutes les notifications sur les emplois disponibles. Il s’agit des postes salariés permanents ou temporaires, stages, apprentissages, etc. dont le poste fournit une rémunération. On imagine qu’il y a des emplois disponibles à l’Ecole (par exemple, enseignants permanents ou vacataires, stage, etc.), à l’Omnes Education, à ses partenaires et aux entreprises en France ou dans l’Union européenne. </p></div>";
		
		//afficher les résultats
		while ($data = mysqli_fetch_assoc($result)) {
			$detail = "detail" . $data['id'];
			
			echo "<div id=Details_element class=$detail><dl>";
				echo "<h2>" . $data['titre'] . "</h2>";
				echo "<dd><a href=postuler.html><button class=button>Postuler</button></a></dd>";
				echo "<h3>A propos de l'offre d'emplois</h3>";
				echo "<dt><h4>QUI SOMMES-NOUS?</h4></dt>";
					echo $data['descriptionE'] ;
				echo "<dt><h4>QUI ETES-VOUS?</h4></dt>";
					echo $data['descriptionP'] ;
				echo "<dt><h4>COMPETENCES REQUISES</h4></dt>";
					echo "<ul>" . $data['descriptionC'] . "</ul></dl></div>";
		}
		echo "</div>";

		//fermer la connexion
		mysqli_close($db_handle);
	?>

	<br>

	<footer id="fin"><a href="Accueil.html">Accueil</a>
 		<a href="MonReseau.html">Mon Réseau</a>
 		<a href="Vous.html">Vous</a>
 		<a href="Notification.html">Notification</a>
 		<a href="Messagerie.html">Messagerie</a>
 		<a href="emplois.php">Emplois</a><br>
 		Copyright &copy; 2023 ECE in Social media professionnel de l'ECE Paris<br>
 		<a href="mailto:ecein.paris@gmail.com">ecein.paris@gmail.com</a>
 	</footer>

</body>
</html>


			
				

			

	

	
