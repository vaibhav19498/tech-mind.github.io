<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>TECH & MIND</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
  img[alt="www.000webhost.com"]{display:none;}
</style>
<body class="w3-theme-l5">



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px;margin-left:500px;">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>  <?php echo $_SESSION['username']; ?></p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>@<?php echo $_SESSION['username']; ?>740</p>
         <p><i class="fa fa-password fa-fw w3-margin-right w3-text-theme"></i> <<a href="client.php"><< BACK</a></p>
        </div>
      </div>
      <br>
      
</body>
</html> 
