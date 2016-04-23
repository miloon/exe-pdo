<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
<?php require_once "vue/menu.php"; ?>
<section>
    <article>
        <h2>Modifier un article</h2>
        <p>

        <form name="edition" method="post" action="">
            <label>Titre</label>
            <input type="letitre" name="lenom" value="<?=$requete['titre']?>"required /><br/>
            <label>Contenu de l'article</label>
            <textarea name="ladesc" value="<?=$requete['ladesc']?>"required ></textarea><br/>
            <label>Date de publication</label>
            <input name="ladate" type="date" value="<?=$requete['ladate']?>" required/><br/>
            <label>Pays</label>
            <select name="pays_id" required>
                <?php
        // ATTENTION ATTENTION ATTENTION à vérifier une fois le routeur admin fait
                // variable vide qui n'affichera donc rien tant qu'elle le reste
                $choix_pays = "";
                while ($affiche = $requetepays->fetch(PDO::FETCH_ASSOC)){
                    // si l'id de l'écrivain correspond à celui qui a écrit le livre
                    if($affiche['idchoicepays']== $requete['idpays']){
                        // on remplit la variable pour sélectionner le champs souhaité
                        $choix_pays = "selected";
                    }
                    // affichage de la variable contenant selected ou du vide
                    echo "<option value='".$requete['id']."' $choix_pays >".$affiche['lenom']."</option>";
                    // si la variable a été remplie, on la vide (1 choix possible)
                    $choix_pays = "";
                }

                ?>
            <input type="submit" value='Modifier la recette'/>
        </form>

        </p>
    </article>
</section>

</body>
</html>

