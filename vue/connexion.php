<?php


?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
  <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
  <title>Connexion</title>
</head>
<body>
<h1>Se connecter</h1>
<form method="post" action="" name="form">
  <input type="text" placeholder="Votre login" name="lelogin" required /><br/>
  <input type='password' placeholder="Votre mot de passe" name="lepass" required /><br/>
  <input type="submit" value="se connecter" /><br/>
  <?php
  if(isset($erreur)) echo "<h3>$erreur</h3>";
  ?>

  <?php
  include"vue/footer.php";
  ?>
</body>
</html>
