<?php
try {
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->beginTransaction();

    $recettesupprimee = $connexion->exec ("DELETE FROM recette WHERE id= $sup;");

    $connexion->commit();
}catch(Exception $e){
    $connexion->rollBack();
    echo "Erreur: " . $e->getMessage();
}
header("Location: ?modifsup");