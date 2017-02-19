<?php

$number1 = 6;
$number2 = 4;
$day = "nedele";

if ($number1 > $number2) {
    echo $number1 . "\n";
} else {
    echo $number2 . "\n";
}

if (($number1 + $number2) > 10) {
    echo "Soucet je vetsi nez deset\n";
}

if ($day == "nedele") {
    echo "Dnes je nedele\n";
}

if ($number1 <= 4 && $number1 >= 8) {
    echo 'Cislo je v intervalu od 4 do 8';
}
