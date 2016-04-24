<?php

/*----------------premiere requete-------------------------*/



// requête préparée
$recup = $connexion->prepare("SELECT p.id,p.lintitule,SUBSTRING(p.ladesc,1,200)AS ladescpay,p.img,p.continent_id,
                                     r.pays_id,r.titre,SUBSTRING(r.ladesc,1,200)AS ladescrec,r.ladate,r.util_id,r.id AS
                                     idrec

                                     from pays p
                                     INNER JOIN recette r
                                     ON p.id = r.pays_id

                                     WHERE p.id = :lid
                                     ORDER BY r.ladate DESC
                                     ;

                             ");

// attribution de valeurs
$recup->bindValue(':lid',$pays, PDO::PARAM_INT);


// exécuter la requête
$recup->execute();

$recuptous= $recup->fetchAll(PDO::FETCH_OBJ);


/*----------------deuxieme requete-------------------------*/

$cont = $connexion->prepare("SELECT * from pays
                                     WHERE id = :lid



                             ");
$cont->bindValue(':lid',$pays, PDO::PARAM_INT);

$cont->execute();


$continant= $cont->fetch(PDO::FETCH_OBJ);



