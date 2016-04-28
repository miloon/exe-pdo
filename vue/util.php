<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <title><?=$titre?></title>
</head>
<body>
<?php require_once "vue/menu.php"; ?>
<section>
    <article>
        <h1><?=$affiche_util['login']?></h1>
        <p><?=$affiche_util['ladesc']?></p>
    </article>
    <article>
        <h3><Les articles écrits par <?=$affiche_util['login']?></h3>
        <?php
        while ($res = $requete->fetch(PDO::FETCH_ASSOC)){
            echo "<li><a href='?idrecette=".$res['idrecette']."'>".$res['recette']."</a></li>";
        }
        ?>
    </article>
</section>
<?php
include"vue/footer.php";
?>
</body>
</html>