<?php

/******************************
 
   DEKLARACE FUNKCÍ

*******************************/

/*
    Funkce bez parametru
*/
function vypisPozdrav() {
    echo "Ahoj\n";
}


/*
    Funkce s parametrem
*/

function vypisPromennou($promenna) {
    echo $promenna . "\n";
}

function pozdrav($jmeno) {
    echo "Ahoj $jmeno\n";
}

/*
    Předání parametru hodnotou
*/
function odectiJednicku($cislo) {
    return $cislo - 1;
}


/*
    Předání parametru odkazem
*/
function prictiJednicku(&$cislo) {
    $cislo = $cislo - 1;
}

/***********************************

    KONEC DEKLARACE FUNKCI
    
***********************************/

/**********************************

    VOLÁNÍ FUNKCÍ

***********************************/

vypisPozdrav();
vypisPromennou(3.14);
pozdrav("Vašek");

$ciselnaPromenna = 10;
echo "Hodnota promenne \$ciselnaPromenna pred volanim funkce odectiJednicku: $ciselnaPromenna\n";

$ciselnaPromenna = odectiJednicku($ciselnaPromenna);

echo "Hodnota promenne \$ciselnaPromenna po volanim funkce odectiJednicku: $ciselnaPromenna\n";


echo "Hodnota promenne \$ciselnaPromenna pred volanim funkce prictiJednicku: $ciselnaPromenna\n";

prictiJednicku($ciselnaPromenna);

echo "Hodnota promenne \$ciselnaPromenna po volanim funkce prictiJednicku: $ciselnaPromenna\n";
