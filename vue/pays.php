<?php
?>
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

        <h1><?= $continant->lintitule ?></h1>
        <p><?= $continant->img ?></p>
        <div class='toggle'>
            <div class='more'><p><?= nl2br($continant->ladesc) ?></p></div>
            <div class="less">
                <a class="button-read-more button-read" href="#read">Cliquez pour en savoir plus !</a>
                <a class="button-read-less button-read" href="#read">Replier</a>
            </div>
        </div>
    </article>
    <article>
        <?php
        foreach ($recuptous as $rec) { ?>

            <h2><?= $rec->titre ?></h2>
            <p><?= $rec->ladate ?></p>
            <p><?= nl2br($rec->ladescrec) ?>... <a href='?idrecette=<?= $rec->idrec ?>'>Lire la suite</a></p>
            <hr/>

        <?php }
        ?>

    </article>
</section>
<script>/* <![CDATA[ */
    /*
     |-----------------------------------------------------------------------
     |  jQuery Multiple Toggle Script by Matt - www.skyminds.net
     |-----------------------------------------------------------------------
     |
     | Affiche et cache le contenu de blocs multiples.
     |
     */
    jQuery(document).ready(function () {
        $(".more").hide();
        jQuery('.button-read-more').click(function () {
            $(this).closest('.less').addClass('active');
            $(this).closest(".less").prev().stop(true).slideDown("1000");
        });
        jQuery('.button-read-less').click(function () {
            $(this).closest('.less').removeClass('active');
            $(this).closest(".less").prev().stop(true).slideUp("1000");
        });
    });
    /* ]]> */ </script>
</body>
</html>