<?php
	//recuprer les données venant de votre formulaire
	$id = isset($_POST["id"])? $_POST["id"] : "";
	$titre = isset($_POST["titre"])? $_POST["titre"] : "";
	$nomentreprise = isset($_POST["nomentreprise"])? $_POST["nomentreprise"] : "";
	$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
	$categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
	$descriptionE = isset($_POST["descriptionE"])? $_POST["descriptionE"] : "";
	$descriptionP = isset($_POST["descriptionP"])? $_POST["descriptionP"] : "";
	$descriptionC = isset($_POST["descriptionC"])? $_POST["descriptionC"] : "";
	$limage= isset($_POST["limage"])? $_POST["limage"] : "";
	
	//identifier votre BDD
	$database = "ecein";

	//connectez-vous de la BDD
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	//si le bouton est cliqué
	if (isset($_POST["button1"])) {
		//si la BDD existe
		if ($db_found) {
			//on cherche l'emplois
			$sql = "SELECT * FROM emplois";
			if ($titre != "") {
				$sql .= " WHERE titre LIKE '%$titre%'";
				if ($nomentreprise != "") {
					$sql .= " AND nomentreprise LIKE '%$nomentreprise%'";
				}
			}
			$result = mysqli_query($db_handle, $sql);
			//regarder s'il y a des résultats
			if (mysqli_num_rows($result) == 0) {
				//pas de résultat
				echo "<h1>Emplois not found. </h1><br>";
			} else {
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>" . "ID" . "</th>";
				echo "<th>" . "Titre" . "</th>";
				echo "<th>" . "Nom Entreprise" . "</th>";
				echo "<th>" . "Adresse" . "</th>";
				echo "<th>" . "Description Emplois" . "</th>";
				echo "<th>" . "Description Profil" . "</th>";
				echo "<th>" . "Description Capacité" . "</th>";
				echo "<th>" . "Catégorie" . "</th>";
				echo "<th>" . "Image" . "</th>";
				echo "<th>" . "Logo" . "</th>";
				echo "</tr>";
				//afficher les résultats
				while ($data = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $data['id'] . "</td>";
					echo "<td>" . $data['titre'] . "</td>";
					echo "<td>" . $data['nomentreprise'] . "</td>";
					echo "<td>" . $data['adresse'] . "</td>";
					echo "<td>" . $data['descriptionE'] . "</td>";
					echo "<td>" . $data['descriptionP'] . "</td>";
					echo "<td>" . $data['descriptionC'] . "</td>";
					$image = $data['image'];
					echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
					echo "<td>" . $data['categorie'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		} else {
			echo "<h1>Database not found. </h1><br>";
		}
	}
	if (isset($_POST["button2"])) {
		//si la BDD existe
		if ($db_found) {
			
			//Vérifier si le livre existe dans la BDD
			$sql = "SELECT * FROM emplois";
			if ($titre != "") {
				$sql .= " WHERE titre LIKE '$titre'";
				if ($nomentreprise != "") {
					$sql .= " AND nomentreprise LIKE '$nomentreprise'";
					$result = mysqli_query($db_handle, $sql);
					if (mysqli_num_rows($result) == 0) {
						//Si le livre n'existe pas 
						$a = 1;
						$sql = "SELECT id FROM emplois";
						$result = mysqli_query($db_handle, $sql);
						while ($data = mysqli_fetch_assoc($result)) {
							if ($a == $data['id']) {
								
								$a += 1;
							}
						}
						$sql = "INSERT INTO emplois(id,image,titre,nomentreprise,adresse,descriptionE,descriptionP,descriptionC,categorie) VALUES ('$a','$limage','$titre','$nomentreprise','$adresse','$descriptionE','$descriptionP','$descriptionC','$categorie')";
						$result = mysqli_query($db_handle, $sql);
						
						echo "<h1>Nouveau enregistrement du emplois créé avec succès.</h1><br>";

						$sql = "SELECT * FROM emplois WHERE emplois.id = $a ";
					    $result = mysqli_query($db_handle, $sql);
					    echo "<h2>Information sur le nouveau emplois ajouté : </h2><br>";
					    echo "<table border='1'>";
						echo "<tr>";
						echo "<th>" . "ID" . "</th>";
						echo "<th>" . "Titre" . "</th>";
						echo "<th>" . "Nom Entreprise" . "</th>";
						echo "<th>" . "Adresse" . "</th>";
						echo "<th>" . "Description Emplois" . "</th>";
						echo "<th>" . "Description Profil" . "</th>";
						echo "<th>" . "Description Capacité" . "</th>";
						echo "<th>" . "Catégorie" . "</th>";
						echo "<th>" . "Image" . "</th>";
						echo "<th>" . "Logo" . "</th>";
						echo "</tr>";
						//afficher les résultats
						while ($data = mysqli_fetch_assoc($result)) {
							echo "<tr>";
							echo "<td>" . $data['id'] . "</td>";
							echo "<td>" . $data['titre'] . "</td>";
							echo "<td>" . $data['nomentreprise'] . "</td>";
							echo "<td>" . $data['adresse'] . "</td>";
							echo "<td>" . $data['descriptionE'] . "</td>";
							echo "<td>" . $data['descriptionP'] . "</td>";
							echo "<td>" . $data['descriptionC'] . "</td>";
							$image = $data['image'];
							echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
							echo "<td>" . $data['categorie'] . "</td>";
							echo "</tr>";
						}
						echo "</table>";
						
					} else {
						echo "<h1>Emplois already exists. Duplicates not allowed.</h1><br>";
					}
				} else {
					echo "<h1>Erreur : Renseignez le Nom d'entreprise.</h1><br>";
				}
			} else {
				echo "<h1>Erreur : Renseignez le titre.</h1><br>";
			}

		} else {
			echo "<h1>Database not found. </h1><br>";
		}
	}
	
	if (isset($_POST["button3"])) {
		//si la BDD existe
		if ($db_found) {
			//Vérifier si le livre existe dans la BDD
			$sql = "SELECT * FROM emplois";
			if ($id != "") {
				$sql .= " WHERE id = $id";
			} else {
				echo "<h1>Entrez le ID de l'emplois</h1><br>";
			}
			$result = mysqli_query($db_handle, $sql);
			if (mysqli_num_rows($result) == 0) {
				//Pas de résultat
				echo "<h1>Cannot delete. Emplois not found. </h1><br>";
			} else {
				//Supprimer
				$sql = "DELETE FROM emplois";
				if ($id != "") {
					$sql .= " WHERE emplois.id = $id";
				}
				$result = mysqli_query($db_handle, $sql);
			    echo "<h1>Delete avec succès.</h1><br>";
			    $sql = "SELECT * FROM emplois";
			    $result = mysqli_query($db_handle, $sql);
			    echo "<h2>Les emplois restant dans la bibliothèque : </h2><br>";
			    echo "<table border='1'>";
				echo "<tr>";
				echo "<th>" . "ID" . "</th>";
				echo "<th>" . "Titre" . "</th>";
				echo "<th>" . "Nom Entreprise" . "</th>";
				echo "<th>" . "Adresse" . "</th>";
				echo "<th>" . "Description Emplois" . "</th>";
				echo "<th>" . "Description Profil" . "</th>";
				echo "<th>" . "Description Capacité" . "</th>";
				echo "<th>" . "Catégorie" . "</th>";
				echo "<th>" . "Image" . "</th>";
				echo "<th>" . "Logo" . "</th>";
				echo "</tr>";
				//afficher les résultats
				while ($data = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $data['id'] . "</td>";
					echo "<td>" . $data['titre'] . "</td>";
					echo "<td>" . $data['nomentreprise'] . "</td>";
					echo "<td>" . $data['adresse'] . "</td>";
					echo "<td>" . $data['descriptionE'] . "</td>";
					echo "<td>" . $data['descriptionP'] . "</td>";
					echo "<td>" . $data['descriptionC'] . "</td>";
					$image = $data['image'];
					echo "<td>" . "<img src='$image' height='120' width='100'>" . "</td>";
					echo "<td>" . $data['categorie'] . "</td>";
					echo "</tr>";
				}
				echo "</table>";
			} 

		} else {
			echo "<h1>Database not found. </h1><br>";
		}
	}


	//fermer la connexion
	mysqli_close($db_handle);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="actionemplois.css" rel="stylesheet" type="text/css"/>
	<title></title>
</head>
<body>

</body>
</html>