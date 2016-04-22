<?php

$titre = "Earth's food";

$requete = $connexion->prepare("SELECT r.titre FROM recette r ORDER BY RAND() LIMIT 5");

// exécution de la requête
$requete->execute();


?>