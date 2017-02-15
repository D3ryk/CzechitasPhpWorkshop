<?php

$a = 8;

echo "Promenna \$a ma hodnotu: " . $a;

if ($a > 8) {
    echo "Promenna \$a je vetsi nez 8\n";
} else if ($a < 8) {
    echo "Promenna \$a je mensi nez 8\n";
} else {
    echo "Promenna \$a je rovna 8\n";
}

if (is_numeric($a)) {
    echo "Promenna \$a obsahuje ciselnou hodnotu\n";
}

if (($a % 2) == 0) {    
    echo "Promenna \$a je sude cislo\n";
} else {
    echo "Promenna \$a je liche cislo\n";
}

$name = "Jan";

switch ($name) {
    case "Jan":
        echo "Ahoj Honzo!\n";
        break;
    case "Jana":
        echo "Ahoj Jano!\n";
        break;
    case "Filip":
        echo "Ahoj Filipe\n";
        break;
    default:
        echo "Ahoj neznámý člověče!\n";
        break;
}