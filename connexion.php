<?php
require_once "config.php";
$connexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME , DB_USER, DB_PWD);
