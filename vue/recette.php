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
        <h1><?=$affiche_recette['titre']?> - (<a href="?idpays=<?=$affiche_recette['idpays']?>"><?=$affiche_recette['lintitule']?></a>)</h1>
        <p><?=nl2br($affiche_recette['recette'])?></p>
        <p><?=$affiche_recette['ladate']?></p>
    </article>
    <article>
        <h3>Auteur : <a href="?idutil=<?=$affiche_recette['idlogin']?>"><?=$affiche_recette['login']?></a></h3>
        <p><?=$affiche_recette['ladesc']?></p>
    </article>
</section>
<?php
include"vue/footer.php";
?>
</body>
</html>