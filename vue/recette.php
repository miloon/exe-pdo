<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$titre?></title>
</head>
<body>
<!-- require_once "view/menu.php" ?>-->
<section>
    <article>
        <h1><?=$affiche_recette['recette']?></h1>
        <p><?=$affiche_recette['recette']?></p>
        <p><?=$affiche_recette['ladate']?></p>
    </article>
    <article>
        <h3>Auteur : <?=$affiche_recette['login']?></h3>
        <p><?=$affiche_recette['ladesc']?></p>
    </article>
</section>

</body>
</html>