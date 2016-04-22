<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$titre?></title>
</head>
<body>
<?php require_once "view/menu.php" ?>
<section>
    <article>
        <h1><?=$requete['titre']?></h1>
        <p><?=$requete['recette']?></p>
        <p><?=$requete['ladate']?></p>
    </article>
    <article>
        <h3><?=$requete['login']?></h3>
        <p><?=$requete['ladesc']?></p>
    </article>
</section>

</body>
</html>