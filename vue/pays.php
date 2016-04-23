<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>titre</title>

</head>
<body>
<?php require_once "vue/menu.php"; ?>
<?php

echo "<h1>".$recuptous['lintitule']."</h1><br/>";
echo "<p>".$recuptous['img']."</p><br/>";
echo "<p>".$recuptous['ladescpay']."</p><br/>";

while ($recuptous){
    echo "<h2>".$recuptous['titre']."</h2><br/>";
    echo "<p>".$recuptous['ladate']."</p><br/>";
    echo "<p>".$recuptous['ladescrec']."... <a href='?idrecette=" . $recuptous['idrec'] . "'>Lire la suite</a></p><hr/>";
    
};
?>
</body>
</html>