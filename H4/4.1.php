<?php 

function celciusToFahrenheit($celcius) {
    $fahrenheit = $celcius * 1.8 + 32;
    return $fahrenheit;
}

function dividableBy3($number) {
    if($number % 3 == 0) {
        return true;
    } else {
        return false;
    }
}

function reverse($string) {
    $reversed = strrev($string);
    return $reversed;
}
