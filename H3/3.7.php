<?php

$spartelkuikens = array("Naam" => "Spartelkuikens", "Aantal" => 25);
$waterbuffels = array("Naam" => "Waterbuffels", "Aantal" => 32);
$plonsmderin = array("Naam" => "Plonsmderin", "Aantal" => 11);
$bommetje = array("Naam" => "Bommetje", "Aantal" => 23);


$zwemclubs = array($spartelkuikens, $waterbuffels, $plonsmderin, $bommetje);

foreach ($zwemclubs as $zwemclub) {
    echo $zwemclub["Naam"] . " heeft " . $zwemclub["Aantal"] . " leden.<br>";
    echo "Aantal zwemmers per club: <br> ";
    for ($i = 1; $i < $zwemclub["Aantal"]; $i++) {
        if($i % 5 == 0) {
        echo "<img src='apen/aap1.jpg' width='50px'>";
        }
    }
    echo "<br><br><br>";
}