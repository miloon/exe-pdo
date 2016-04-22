<?php
require_once "config.php";
require_once "connexion-try-catch.php";

$id = $variabledef;


// requête préparée
$recup = $connexion->prepare("SELECT u.id,u.login,u.droit_id,u.ladesc,
                                    d.lintitule,
                                    r.id AS idrec,r.titre,r.ladate,r.ladesc AS descrec,
                                    p.ladesc AS descpay,p.img,p.lintitule AS intitulepay,p.id AS                                        idpay,
                                    cont.id AS idcont,cont.lintitule AS intitulecont

                                    FROM  user u
                                    INNER JOIN droit d
                                    ON u.droit_id = d.id
                                    INNER JOIN recette r
                                    ON r.user_id = u.id
                                    INNER JOIN pays p
                                    ON r.pays_id = p.id
                                    INNER JOIN continent cont
                                    ON p.continent_id = cont.id
                                     WHERE  p.id = 1");

// attribution de valeurs
$recup->bindValue(':lid',$id, PDO::PARAM_INT);


// exécuter la requête
$recup->execute();

$recuptous = $recup->fetch(PDO::FETCH_OBJ);