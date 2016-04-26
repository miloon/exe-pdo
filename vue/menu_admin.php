<?php

$oceanie = $connexion->query("SELECT * from pays
                                     WHERE pays.continent_id = 1



                             ");


$oceanie->execute();


$recupoceanie= $oceanie->fetchAll(PDO::FETCH_OBJ);


/***************************europ******************/
$europe = $connexion->query("SELECT * from pays
                                     WHERE pays.continent_id = 3



                             ");


$europe->execute();


$recupeurope= $europe->fetchAll(PDO::FETCH_OBJ);

/**************************asie***************************/

$asie = $connexion->query("SELECT * from pays
                                     WHERE pays.continent_id = 2



                             ");


$asie->execute();


$recupasie= $asie->fetchAll(PDO::FETCH_OBJ);

/***************************afrique************************/

$afrique = $connexion->query("SELECT * from pays
                                     WHERE pays.continent_id = 4



                             ");


$afrique->execute();


$recupafrique= $afrique->fetchAll(PDO::FETCH_OBJ);


/******************************amerique****************************/

$amerique = $connexion->query("SELECT * from pays
                                     WHERE pays.continent_id = 5



                             ");


$amerique->execute();


$recupamerique= $amerique->fetchAll(PDO::FETCH_OBJ);

/*********************************************************/

?>

<nav>
    <ul>
        <li><a href="./">Accueil Admin</a></li>

        <!------------------------Oceanie--------------------------------->

        <div class='toggle'>
            <div class='more'>
                <ul>
                    <?php


                    foreach ($recupoceanie as $rec) { ?>


                <li><a href="?modif=<?=$rec->id?>"> <?= $rec->lintitule ?></a></li>


                <?php }
                ?>

                </ul>

                    </div>
            <div class="less">
                <a class="button-read-more button-read" href="#read">Océanie</a>
                <a class="button-read-less button-read" href="#read">Océanie</a>
            </div>
        </div>
        <!------------------------Europe--------------------------------->

        <div class='toggle'>
            <div class='more'>
                <ul>
                    <?php


                    foreach ($recupeurope as $rec) { ?>


                        <li><a href="?modif=<?=$rec->id?>"> <?= $rec->lintitule ?></a></li>


                    <?php }
                    ?>

                </ul>

            </div>
            <div class="less">
                <a class="button-read-more button-read" href="#read">Europe</a>
                <a class="button-read-less button-read" href="#read">Europe</a>
            </div>
        </div>



        <!------------------------Asie--------------------------------->


        <div class='toggle'>
            <div class='more'>
                <ul>
                    <?php


                    foreach ($recupasie as $rec) { ?>


                        <li><a href="?modif=<?=$rec->id?>"> <?= $rec->lintitule ?></a></li>


                    <?php }
                    ?>

                </ul>

            </div>
            <div class="less">
                <a class="button-read-more button-read" href="#read">Asie</a>
                <a class="button-read-less button-read" href="#read">Asie</a>
            </div>
        </div>

        <!------------------------Afrique--------------------------------->
        <div class='toggle'>
            <div class='more'>
                <ul>
                    <?php


                    foreach ($recupafrique as $rec) { ?>


                        <li><a href="?modif=<?=$rec->id?>"> <?= $rec->lintitule ?></a></li>


                    <?php }
                    ?>

                </ul>

            </div>
            <div class="less">
                <a class="button-read-more button-read" href="#read">Afrique</a>
                <a class="button-read-less button-read" href="#read">Afrique</a>
            </div>
        </div>

<!------------------------Amerique--------------------------------->
        <div class='toggle'>
            <div class='more'>
                <ul>
                    <?php


                    foreach ($recupamerique as $rec) { ?>


                        <li><a href="?modif=<?=$rec->id?>"> <?= $rec->lintitule ?></a></li>


                    <?php }
                    ?>

                </ul>

            </div>
            <div class="less">
                <a class="button-read-more button-read" href="#read">Amerique</a>
                <a class="button-read-less button-read" href="#read">Amerique</a>
            </div>
        </div>


        <li><a href="?deconnect">Déconnexion</a></li>
    </ul>
</nav>