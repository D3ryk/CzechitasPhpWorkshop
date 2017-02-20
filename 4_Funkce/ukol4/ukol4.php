<?php

/***********************

    DEKLARACE FUNKCÍ

************************/

function vypisDatumCas($datum, $cas) {
    echo "Datum: $datum, Cas: $cas";
}

function sectiCisla($cislo1, $cislo2) {
    return $cislo1 + $cislo2;
}

function vetsiNez($cislo1, $cislo2) {
    if ($cislo1 > $cislo2) {
        return true;
    }

    return false;
}


function vratPrvniPrvekPole($array) {
    return $array[0];
}

function druhaMocnina($cislo) {
    return $cislo * $cislo;
}


/***********************

    VOLÁNÍ FUNKCÍ

***********************/

echo "Ukol a)\n";
vypisDatumCas('20.02.2017', '15:00');

echo "\nUkol b)\n";
echo sectiCisla(1, 1);

echo "\nUkol c)\n";
$jeVetsiNez = vetsiNez(4, 3);
var_dump($jeVetsiNez);

echo "\nUkol d)\n";
echo vratPrvniPrvekPole([5, 10, 15, 20]);

echo "\nUkol e)\n";
echo druhaMocnina(4);

echo "\n";
