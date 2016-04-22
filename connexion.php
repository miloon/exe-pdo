<?php
require_once "config.php";

// on essaie de se connecter
try {

// connexion simple grâce à l'interface PDO

    $connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME.';charset=utf8', DB_USER, DB_PWD);

}catch(PDOException $e){
    echo "Erreur : ".$e->getMessage()."<br/>";
    echo "Numéro d'erreur : ".$e->getCode();
    exit();
}
