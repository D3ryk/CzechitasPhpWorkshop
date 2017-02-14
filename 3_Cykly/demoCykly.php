<?php 

echo "For cyklus\n\n";

for ($x = 0; $x <= 10; $x++) {
    echo "Hodnota \$x je: $x \n";
}


echo "\nCyklus while\n\n";

$x = 0;
while ($x <= 10) {
    echo "Hodnota \$x je: $x \n";
    $x++;
}


echo "\nCyklus do while\n\n";

$x = 0;
do {
    echo "Hodnota \$x je: $x \n";
    $x++;
} while ($x <= 0);


echo "\nCyklus foreach a prochazeni pole\n\n";


$barvy = array('Cervena', 'Modra', 'Bila');
/*
    Procházení pole pomocí foreache
*/

foreach ($barvy as $barva) {
    echo $barva . "\n";
}

$pole = array(
    '1' => 'leden',
    '2' => 'unor',
    '3' => 'brezen'
);

foreach ($pole as $klic => $hodnota) {
    echo "klic: " . $klic . " hodnota: " . $hodnota . "\n";
}


echo "\nCyklus for a prochazeni pole\n\n";
/*
    Alternativní prochazení pole pomocí for cyklu

    Pole barvy je vlastne definovane jako:
    array( 0 => 'Cervena', 1 => 'Modra', 2 => 'Bila' )
*/

for ($i = 0; $i < count($barvy); $i++) {
    echo $barvy[$i] . "\n"; // pomoci $barvy[$i] pristupuji do pole pro prvek v poli pod klicem $i
}
