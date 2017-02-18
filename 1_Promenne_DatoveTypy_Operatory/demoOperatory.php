<?php

// Základní operátor přiřazení

$a = 1;
$b = 2;


// BINÁRNÍ OPERÁTORY --> potřebují pro své provedení dva operandy (proměnné, hodnoty atd.) 

/*
    Aritmetické operátory
*/

$c = $a + $b; // sčítáni
$d = $b - $a; // odčítáníé
$e = $a / $b; // dělení
$f = $a * $b; // násobení
$g = $a % 2; // zbytek po celočíselném dělení


/*
    Porovnávací operátory
*/

$h = $a == 2; // rovná se?
$ch = $a != 2; // nerovná se? je možné použít i <> pro nerovnost
$i = $a < 1; // je menší než?
$j = $a <= 1; // je menší rovno?
$k = $a > 1; // je vetší?
$l = $a >= 1; // je vetší rovno?

/*
    Řeťezcový operátor
*/

$m = "ahoj, " . " jak " . " se " . "más?";


/*
    Logické operátory    


    Tabulka logických operací viz http://mdg.vsb.cz/zmoravkova/Matlab/node32.html
*/

$n = true && false;
$n = true and true;
$o = true || false;
$o = true or false;


// UNÁRNÍ OPERÁTORY --> potřebují ke svému provedení jeden operand(promennou, hodnotu atd.)

/*
    Aritmetické operátory
*/

$a++; // pričtení jednicky, je možné číst jako $a = $a + 1;
$b--; // odečtení jedničky, je možné číst jako $b = $b - 1;



/*
    Logické operátory
*/

$p = !$n; // v $n je true, lze číst jako !true


// Speciální operátory přiřazení

$q = 10;
$q += $a; // sčítání, čti $q = $q + $a;
$q -= $a; // odčítání, čti $q = $q - $a;
$q *= $a; // násobení, čti $q = $q * $a;
$q /= $a; // dělení, čti $q = $q / $a;
$q %= 2; // zbytek po deleni, čti $q = $q % $a;

$r = "Jan";
$r .= " Novak"; // zřetězení, čti $r = $r . " Novak";