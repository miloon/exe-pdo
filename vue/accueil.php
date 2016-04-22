<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$titre?></title>
</head>
<body>
<!-- require_once "vue/menu.php" ?>-->
<section>

    <img alt="map.jpg" usemap="#map" src="vue/img/map.jpg"/>
    <map id="map" name="map">
        <area alt="Asie" href="?idcontinent=2" shape="poly" coords="432,127,430,252,471,299,514,304,664,155,655,112,491,35,432,126"/>
        <area alt="Europe" href="?idcontinent=3" shape="poly" coords="379,85,290,178,305,234,316,237,344,230,357,242,367,241,385,244,402,281,416,284,436,270,425,251,431,120,379,85"/>
        <area alt="Océanie" href="?idcontinent=1" shape="poly" coords="495,306,520,304,554,270,667,336,641,411,569,409,502,369,494,305"/>
        <area alt="Afrique" href="?idcontinent=4" shape="poly" coords="354,377,404,366,423,329,418,284,404,286,383,245,358,245,344,234,302,241,286,277,352,376"/>
        <area alt="Amerique" href="?idcontinent=5" shape="poly" coords="205,439,277,311,204,246,282,140,321,56,298,11,258,0,158,13,14,112,4,147,18,205,78,199,108,280,168,296,185,438,205,438"/>
    </map>


<h2>5 recettes au hasard</h2>
    <ul>
<?php
        while ($res = $requete->fetch(PDO::FETCH_ASSOC)){
        echo "<li><a href='?idrecette=".$res['id']."'>".$res['titre']."</a></li>";
        }
?>
        </ul>
</section>

</body>
</html>