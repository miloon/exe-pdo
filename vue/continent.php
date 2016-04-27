
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>titre</title>
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <!-- Ajout du .js pour le toggle -->
    <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>

</head>
<body>
<?php require_once "vue/menu.php"; ?>
<section>
    <article>

        <?php
        foreach ($recuptous as $rec) { ?>
        <h1><?= $rec->plintitule ?></h1>
        <p><a><?= $rec->img ?></p></a>

        <?php }
        ?>
    </article>
    <article>
        <h1><?= $rec->clintitule ?></h1>
    </article>

    <article>
        <h2>Nos 3 dernières recettes</h2>
        <p><?= $nb->idrecette ?></p>
        <?php
        foreach ($recuptous as $rec) { ?>
        <p><?= $rec->titre ?></p>
        <p><?= nl2br($rec->ladesc) ?>... <a href='?idrecette=<?= $rec->idrecette ?>'>Lire la suite</a>
            <?php }
            ?>
    <article>

    </article>

</section>

</body>
</html>