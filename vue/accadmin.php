<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <title>Earth's food - Administration</title>
    <!-- Ajout du .js pour le toggle -->
    <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
=======
    <!-- Ajout du .js pour le toggle -->
    <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
    <title><?=$titre?></title>
>>>>>>> ca2a9b2a76e4a7cf472d0fd475c1bec1cee15514
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
<<<<<<< HEAD
=======

>>>>>>> ca2a9b2a76e4a7cf472d0fd475c1bec1cee15514
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
<<<<<<< HEAD
=======

>>>>>>> ca2a9b2a76e4a7cf472d0fd475c1bec1cee15514
</body>
</html>