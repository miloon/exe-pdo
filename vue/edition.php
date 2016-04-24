<?php
// ATTENTION je fais le modele ici histoire de pas me perdre. Je refoutrai tout ensuite dans modele.
// si le formulaire d'édition est vide
if(empty($_POST['edition'])) {
    // création d'une variable pour afficher le formulaire
    $affiche_modif = true;

    $requete = $connexion->prepare("SELECT r.id AS idrecette, r.titre, r.ladesc, r.ladate, p.id AS idpays, p.lintitule AS lepays
FROM recette r
  INNER JOIN pays p
  ON r.pays_id = p.id
WHERE r.id = $idrecette;
");
// exécution de la requête
    $requete->execute();

    $requetepays = $connexion->prepare("SELECT p.id AS idchoicepays, p.lintitule
FROM pays p
ORDER BY p.continent_id ASC, p.lintitule ASC;
");
    $requetepays->execute();
}else { // le formulaire est envoyé
    $affiche_modif = false; // on cache le formulaire de modif
    $succes_modif = true; // on affiche le message d'insertion
    // et on fait les vérif'
    $letitre = htmlspecialchars(strip_tags(trim($_POST['titre'])),ENT_QUOTES);
    $ladesc = htmlspecialchars(strip_tags(trim($_POST['ladesc'])),ENT_QUOTES);

    // vérif si l'id du pays est bien un chiffre
    if (ctype_digit($_POST['idpays'])) {
        $idpays = $_POST['idpays'];
    } else {
        $idpays = 1;
    }

    try{
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->beginTransaction();
        $prepare = $connexion->prepare("UPDATE `recette` SET `titre`=:titre,`ladesc`=:ladesc,`ladate`=:ladate,`pays_id`=:idpays WHERE `id`=$idrecette");

        $prepare->bindValue(":titre",$letitre,PDO::PARAM_STR);
        $prepare->bindValue(":ladesc",$ladesc,PDO::PARAM_STR);
        $prepare->bindValue(":ladate",$ladate,PDO::PARAM_STR);
        $prepare->bindValue(":idpays",$idpays,PDO::PARAM_INT);

    }catch (Exception $e){
        $connexion->rollBack();
        echo "Erreur : " . $e->getMessage();
    }

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
<?php require_once "vue/menu.php"; ?>
<section>
    <?php if($affiche_modif) {
    ?>
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

