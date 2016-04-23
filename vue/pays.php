<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>titre</title>

</head>
<body>

<?php

echo "<h1>".$continant->lintitule."</h1><br/>";
echo "<p>".$continant->img."</p><br/>";
echo "<p>".$continant->ladesc."</p><br/>";

foreach($recuptous as $rec){
    echo "<h2>".$rec->titre."</h2><br/>";
    echo "<p>".$rec->ladate."</p><br/>";
    echo "<p>".$rec->ladescrec."... <a href='?idrecette=" . $rec->idrec . "'>Lire la suite</a></p><hr/>";
    
};
?>
</body>
</html>