
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<?php include_once "header.php"; ?>


<body>

	
	<section class="form login">
		<div class="imgBox"></div>
		<div class="contentBox">
			<div class="formBox">
				<img src="ece in logo final.png" alt="ECE logo" height="100" width="240" style="margin-top: 0px;"> </img><br><br><br><br>
				<h2> Se connecter</h2>
				<form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
					<div class="inputBx">
						<span>Pseudo</span>
						<input type="text">
					</div>
					<form action="#">
					<div class="inputBx">
						<span>Email</span>
						<input type="text" name="email" placeholder="Enter your email" required>
					</div>
					<div class="inputBx">
						<span>Mot de Passe</span>
						<input type="password" name="password" placeholder="Enter your password" required>
						
					</div>
					<div class="remember">
						<label><input type="checkbox">Se souvenir</label>
					</div>
					<div class="inputBx">
						<input type="submit" name="submit" value="Continue to Chat">
					</div>

					<div class="inputBx">
						<p>Nouveau sur ECE in?<a href="index.php">S'inscrire </p>
					</div>
				</form>

			</div>
		</div>


	</section>
	<script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>