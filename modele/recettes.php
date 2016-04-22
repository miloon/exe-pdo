<?php

$requete = $connexion->prepare("SELECT r.titre, r.ladesc AS recette, r.ladate, u.login, u.ladesc
  FROM recette r
INNER JOIN user u
ON r.user_id = u.id
WHERE r.id = $idrecette;");

// exécution de la requête
$requete->execute();

if(is_null($requete)){
    $erreur = "Cet écrivain n'existe pas !";
    // on arrête le script
    exit();
}

$titre = $requete['titre'];
?>