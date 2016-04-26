<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <title><?=$titre?></title>
</head>
<body>
<?php
require_once "vue/menu.php";
?>
<section>
    <article>
        <h1>Bonjour <?=$_SESSION['login']?> !</h1>
        <?php
        if ($_SESSION['ecrit']){?>
            <p>Vous avez l'autorisation de rédiger <a href="?insert">un nouvel article</a>.</p>
            <p>Vous avez aussi l'autorisation de modifier <a href="?modifsup">des articles existants.</a>.</p>
        <?php
        }
        ?>
    </article>
</section>

</body>
</html>