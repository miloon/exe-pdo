<?php

$oceanie = $connexion->prepare("SELECT * from pays
                                     WHERE pays.continent_id = 1



                             ");
$oceanie->bindValue(':lid',$pays, PDO::PARAM_INT);

$oceanie->execute();


$recupoceanie= $oceanie->fetchAll(PDO::FETCH_OBJ);


/***************************europ******************/
$europe = $connexion->prepare("SELECT * from pays
                                     WHERE pays.continent_id = 2



                             ");
$europe->bindValue(':lid',$pays, PDO::PARAM_INT);

$europe->execute();


$recupeurope= $europe->fetchAll(PDO::FETCH_OBJ);

/**************************asie***************************/

$asie = $connexion->prepare("SELECT * from pays
                                     WHERE pays.continent_id = 3



                             ");
$asie->bindValue(':lid',$pays, PDO::PARAM_INT);

$asie->execute();


$recupasie= $asie->fetchAll(PDO::FETCH_OBJ);

/***************************afrique************************/

$afrique = $connexion->prepare("SELECT * from pays
                                     WHERE pays.continent_id = 4



                             ");
$afrique->bindValue(':lid',$pays, PDO::PARAM_INT);

$afrique->execute();


$recupafrique= $afrique->fetchAll(PDO::FETCH_OBJ);


/******************************amerique****************************/

$amerique = $connexion->prepare("SELECT * from pays
                                     WHERE pays.continent_id = 5



                             ");
$amerique->bindValue(':lid',$pays, PDO::PARAM_INT);

$amerique->execute();


$recupamerique= $amerique->fetchAll(PDO::FETCH_OBJ);

/*********************************************************/

?>

<nav>
    <ul>
        <li><a href="./">Accueil Admin</a></li>



        <div class='toggle'>
            <div class='more'><p><?php


                    foreach ($recuptous as $rec) { ?>


                <p><?= $rec->lintitule ?></p>

                <hr/>

                <?php }
                ?>



                    ?></p></div>
            <div class="less">
                <a class="button-read-more button-read" href="#read">Océanie</a>
                <a class="button-read-less button-read" href="#read">Replier</a>
            </div>
        </div>

        



        <li><a href="./">Afrique</a></li>


        <li><a href="./">Amérique</a></li>


        <li><a href="./">Asie</a></li>



        <li><a href="?deconnect">Déconnexion</a></li>
    </ul>
</nav>