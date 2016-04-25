<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <title>Edition d'un article</title>
</head>
<body>
<?php require_once "vue/menu.php"; ?>
<section>
    <?php if($affiche_modif) {
    ?>
    <article>
        <h2>Modifier un article</h2>
        <p>

        <form name="edition" method="POST" action="">
            <label>Titre</label>
            <input name="letitre" type="text" value="<?=$recup_recette['titre']?>"required /><br/>
            <label>Contenu de l'article</label>
            <textarea name="ladesc" required ><?=nl2br($recup_recette['ladesc'])?></textarea><br/>
            <label>Date de publication</label>
            <input name="ladate" type="datetime" value="<?=$recup_recette['ladate']?>" required/><br/>
            <label>Pays</label>

            <select name="id_pays" required>

                <?php
                // variable vide qui n'affichera donc rien tant qu'elle le reste

                while ($affiche = $requetepays->fetch(PDO::FETCH_ASSOC)){
                    $choix_pays = "";
                    if($affiche['idchoicepays'] == $recup_recette['idpays']){
                        $choix_pays = "selected";
                    }
                    // affichage de la variable contenant selected ou du vide
                    echo "<option value='".$affiche['idchoicepays']."' $choix_pays>".$affiche['lintitule']."</option>";
                    // si la variable a été remplie, on la vide (1 choix possible)
                    $choix_pays = "";
                }?>
            </select>

            <input type="submit" name="edition" value='Modifier la recette'/>
        </form>

        </p>
    </article>
    <?php}
    if($succes_modif) {
    ?><article>
        <h2>Article modifié !</h2>
    </article>
    <?php } ?>
</section>

</body>
</html>