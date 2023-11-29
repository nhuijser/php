<?php

$dier = $_GET["dieren"];

switch($dier) {
    case "aap":
        echo "<img src='img/aap.jpg'>";
        break;
    case "hond":
        echo "<img src='img/hond.jpeg'>";
        break;
    case "hamster":
        echo "<img src='img/hamster.jpeg'>";
        break;
    case "sinaasappel":
        echo "<img src='img/sinaasappel.png'>";
        break;
}