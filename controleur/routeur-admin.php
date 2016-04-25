<?php
// accueil de l'admin
if(empty($_GET)){
    require_once "modele/modifsup.php";
    require_once "vue/modifsup.php";

// déconnexion
}elseif(isset($_GET['deconnect'])){
    require_once "modele/deco.php";
}

// nouvel article
elseif(isset($_GET['new'])){
    require_once "modele/new.php";
    require_once "vue/new.php";
}

// suppression de l'article
elseif(isset($_GET['sup'])&& ctype_digit($_GET['sup'])){
    $sup = (int) $_GET['sup'];
    require_once "modele/sup.php";

}
elseif(isset($_GET['modif'])&& ctype_digit($_GET['modif'])){
    $idrecette = (int) $_GET['modif'];
    /*require_once "modele/edition.php";*/
    require_once "vue/edition.php";

}
