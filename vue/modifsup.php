<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <title>Panneau d'administration</title>
    <!-- Ajout du .js pour le toggle -->
    <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
    <!-- Script pour la suppression d'un article -->
    <script src="vue/js/monjs.js"></script>
</head>
<body>
<?php
require_once "vue/menu_admin.php";
?>
<section>

<h2>Panneau d'administration de votre site</h2>
    <table><tr><td>Titre</td><td>Date</td><td>Pays</td><td>Continent</td><td>Auteur</td><td></td><td></td></tr>
<?php
        while ($res = $requete->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr><td><a href='?modif=<?=$res['id']?>'><?=$res['titre']?></a></td>
            <td><?=$res['jour']?>/<?=$res['mois']?>/<?=$res['annee']?> - <?=$res['heure']?>:<?=$res['minute']?></td>
            <td><?=$res['pays']?></td>
            <td><?=$res['continent']?></td>
            <td><?=$res['login']?></td>
            <td><a href='?modif=<?=$res['id']?>'><img src='vue/img/editer.gif' alt='edition'/></a></td>
            <td><img alt='supprimer'
                onclick='confirmDelete("<?=$res['titre']?>",<?=$res['id']?>)'
                style='<?=$displaysup?>'
                src='vue/img/delete.gif'/></td></tr>
        <?php
        }
?>
    </table>
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