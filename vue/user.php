<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$titre?></title>
</head>
<body>
<!-- En vrai, j'attends d'avoir le router et pour voir si tout fonctionne comme il le faut-->
<?php require_once "view/menu.php" ?>
<section>
    <article>
        <h1><?=$requete['login']?></h1>
        <p><?=$requete['ladesc']?></p>
    </article>
    <article>
        <h3><Les articles écrits par <?=$requete['login']?></h3>
        <?php
        while ($res = $requete->fetch(PDO::FETCH_ASSOC)){
            echo "<li><a href='?idrecette=".$res['idrecette']."'>".$res['recette']."</a></li>";
        }
        ?>
    </article>
</section>

</body>
</html>