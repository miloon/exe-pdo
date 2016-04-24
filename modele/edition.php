<?php
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
?>