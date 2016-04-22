<?php

$requete = $connexion->prepare("SELECT u.login, u.ladesc, r.id AS idrecette, r.titre AS recette
FROM util u
INNER JOIN recette r
ON u.id = r.util_id
WHERE u.id = 3;");

// exécution de la requête
$requete->execute();

if(is_null($requete)){
    $erreur = "Cet auteur n'existe pas !";
    // on arrête le script
    exit();
}

$titre = $requete['login'];

?>