<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <title>Earth's food - Administration</title>
    <!-- Ajout du .js pour le toggle -->
    <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>

    <title>Administation</title>

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
            <p>Vous avez l'autorisation de rédiger <a href="?insert">un nouvel article</a>.</p><?php
        }
        if ($_SESSION['modifie']){
        ?>
            <p>Vous avez aussi l'autorisation d<a href="?modifsup">'administrer les articles existants.</a>.</p>
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
     | Affiche et cache le contenu de blocs multiples. Bloc après le texte.
     |
     */
    jQuery(document).ready(function() {
        $(".more").hide();
        jQuery('.button-read-more').click(function () {
            $(this).closest('.less').addClass('active');
            $(this).closest(".less").next().stop(true).slideDown("1000");
        });
        jQuery('.button-read-less').click(function () {
            $(this).closest('.less').removeClass('active');
            $(this).closest(".less").next().stop(true).slideUp("1000");
        });
    });
    /* ]]> */ </script>
</body>
</html>