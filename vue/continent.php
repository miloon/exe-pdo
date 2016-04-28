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
    <!--Ajout d'un tableau pour permettre de prendre le premier objet -->
    <article>
        <h1><?= $recuptous[0]->clintitule ?></h1>
    </article>

    <article>

        <?php
        foreach ($recuptous as $rec) { ?>
            <h1><?= $rec->plintitule ?> | <?= $rec->nb ?></h1>
            <p><a><?= $rec->img ?></p></a>
        <?php
            $titre = explode('|||',$rec->titre);
            $desc = explode('|||',$rec->ladescrecette);
            $id = explode(',',$rec->idrecette);
            foreach($id as $clef => $val){
                echo "<h3>".$titre[$clef]."</h3>";
                echo "<p>".$desc[$clef]." ... </p>";
                echo "<a href='?idrecette=$val'>Lire la suite</a>";
            }

        ?>

        <?php }
        ?>
    </article>



</section>

</body>
</html>