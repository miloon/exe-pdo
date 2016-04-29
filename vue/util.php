<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <!-- Lien vers la CSS de Bootstrap -->
    <link href="vue/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim et Respond.js pour le support des éléments HTML5 et des media queries dans IE8 -->
    <!-- ATTENTION: Respond.js ne fonctionne pas si on lit la page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title><?= $titre ?></title>
</head>
<body>
<div class="container">
    <?php require_once "vue/menu.php"; ?>
    <section>
        <article>
            <h1><?= $affiche_util['login'] ?></h1>
            <p><?= $affiche_util['ladesc'] ?></p>
        </article>
        <article>
            <h3>
                <Les articles écrits par <?= $affiche_util['login'] ?></h3>
            <?php
            while ($res = $requete->fetch(PDO::FETCH_ASSOC)) {
                echo "<li><a href='?idrecette=" . $res['idrecette'] . "'>" . $res['recette'] . "</a></li>";
            }
            ?>
        </article>
    </section>
    <?php
    include "vue/footer.php";
    ?>
</body>
</html>