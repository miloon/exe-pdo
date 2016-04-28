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
    <title>Edition d'un article</title>
    <!-- Ajout du .js pour le toggle -->
    <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
</head>
<body>
<div class="container">
    <?php require_once "vue/menu_admin.php"; ?>
    <section>
        <?php if ($affiche_modif) {
            ?>
            <article>
                <h2>Modifier un article</h2>

                <div class="row">
                <form name="edition" method="POST" action="" class="well">
                    <div class="form-group"><label for="titre">Titre</label>
                    <input class="form-control" id="titre" name="letitre" type="text" value="<?= $recup_recette['titre'] ?>" required/></div>
                    <div class="form-group"><label for="contenu">Contenu de l'article</label>
                    <textarea class="form-control" id="contenu" name="ladesc" required><?= nl2br($recup_recette['ladesc']) ?></textarea></div>
                    <div class="form-group"><label for="ladate">Date de publication</label>
                    <input id="ladate" name="ladate" type="datetime" value="<?= $recup_recette['ladate'] ?>" required/></div>
                    <div class="form-group"><label for="pays">Pays</label>

                    <select class="form-control" id="pays" name="id_pays" required>

                        <?php
                        // variable vide qui n'affichera donc rien tant qu'elle le reste

                        while ($affiche = $requetepays->fetch(PDO::FETCH_ASSOC)) {
                            $choix_pays = "";
                            if ($affiche['idchoicepays'] == $recup_recette['idpays']) {
                                $choix_pays = "selected";
                            }
                            // affichage de la variable contenant selected ou du vide
                            echo "<option value='" . $affiche['idchoicepays'] . "' $choix_pays>" . $affiche['lintitule'] . "</option>";
                            // si la variable a été remplie, on la vide (1 choix possible)
                            $choix_pays = "";
                        } ?>
                    </select></div>

                    <input type="submit" name="edition" value='Modifier la recette'/>
                </form>
</div>

            </article>
            <?php
        }

        if ($affiche_success) {
            ?>
            <h2>Félicitations ! L'article a bien été modifié !</h2>
            <p>Good job <?= $_SESSION['login'] ?>!</p>
            <?php
        } ?>

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
        jQuery(document).ready(function () {
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