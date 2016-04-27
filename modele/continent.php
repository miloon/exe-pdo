<?php

// requête préparée
$recup = $connexion->prepare(" SELECT p.lintitule as plintitule,p.ladesc,p.img, r.id as idrecette , r.titre,SUBSTR( r.ladesc,1,100)  as ladescrecette, r.pays_id, c.lintitule as clintitule
FROM continent c
  INNER JOIN pays p
    ON c.id = p.continent_id
  INNER JOIN recette r
    ON p.id = r.pays_id
WHERE c.id = :lid
ORDER BY r.titre DESC
LIMIT 3;                 ");

// attribution de valeurs
$recup->bindValue(':lid',$continent, PDO::PARAM_INT);


// exécuter la requête
$recup->execute();

$recuptous= $recup->fetchAll(PDO::FETCH_OBJ);

$nb = mysqli_num_rows($recuptous);





