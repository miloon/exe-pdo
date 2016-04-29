<?php
// accueil de l'admin
if(empty($_GET)){
    require_once "vue/accadmin.php";

// déconnexion
}elseif(isset($_GET['deconnect'])){
    require_once "modele/deco.php";
}

elseif(isset($_GET['modifsup'])) {
    require_once "modele/modifsup.php";
    require_once "vue/modifsup.php";

}

// nouvel article
elseif(isset($_GET['insert'])){
    require_once "modele/insert.php";
    require_once "vue/insert.php";
}


// suppression de l'article
elseif(isset($_GET['sup'])&& ctype_digit($_GET['sup'])){
    $sup = (int) $_GET['sup'];
    require_once "modele/sup.php";

} elseif (isset($_GET['idrecette']) && ctype_digit($_GET['idrecette'])) {
    $recette = (int)$_GET['idrecette'];
    require_once "modele/recette.php";
    require_once "vue/recette.php";

} elseif (isset($_GET['idpays']) && ctype_digit($_GET['idpays'])) {
    $pays = (int)$_GET['idpays'];
    require_once "modele/recetteadmin.php";
    require_once "vue/recetteadmin.php";
}

elseif(isset($_GET['modif'])&& ctype_digit($_GET['modif'])){
    $idrecette = (int) $_GET['modif'];
    require_once "modele/edition.php";
    require_once "vue/edition.php";
// tentative de faire le modifsup rangeable par clic
}elseif(isset($_GET['insert'])){

}
