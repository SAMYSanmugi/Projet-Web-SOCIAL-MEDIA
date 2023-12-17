<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chat App</title>
  <link rel="stylesheet" href="styleco.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head><body>    
  <section class="form login">
      <div class="imgBox"></div>
      <div class="contentBox">
        <div class="formBox">
          <img src="ece in logo final.png" alt="ECE logo" height="100" width="240" style="margin-top: 0px;"> </img><br><br><br><br>
        <h2> Se connecter</h2>
          
        
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          <div class="inputBx">
            <label>Email</label>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="inputBx">
            <label>Mot de passe</label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Continue to Chat">
          </div>
        </form>
          <div class="link">Pas encore inscrit? <a href="index.php">Inscrivez vous</a></div>
    
          </div>

        
        </div>
  
        
      </div>


      
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>