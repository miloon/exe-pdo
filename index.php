<?php
session_start();
require_once "config.php";
require_once "connexion.php";


if (!isset($_SESSION["idutil"])|| $_SESSION["idutil"]!= session_id()) {
    require_once "controleur/routeur-publique.php";
}else{
    require_once "controleur/routeur-admin.php";
}