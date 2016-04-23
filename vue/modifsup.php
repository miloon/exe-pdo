<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$titre?></title>
</head>
<body>
<?php
require_once "vue/menu.php";
?>
<section>

<h2>Panneau d'administration de votre site</h2>
    <table><tr><td>Titre</td><td>Date</td><td>Pays</td><td>Continent</td><td>Auteur</td><td></td></tr>
<?php
        while ($res = $requete->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td><a href='?editer=".$res['id']."'>".$res['titre']."</a></td><td>".$res['jour']."/".$res['mois']."/".$res['annee']." - ".$res['heure'].":".$res['minute']."</td><td>".$res['pays']."</td><td>".$res['continent']."</td><td>".$res['login']."</td><td><img style='".$displaysup."' src='vue/img/delete.gif'/></td></tr>";
        }
?>
    </table>
</section>

</body>
</html>