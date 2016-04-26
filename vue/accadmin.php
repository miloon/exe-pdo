<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <!-- Ajout du .js pour le toggle -->
    <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
    <title>Adminstration</title>
</head>
<body>
<?php
require_once "vue/menu_admin.php";
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