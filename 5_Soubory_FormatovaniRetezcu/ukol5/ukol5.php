<?php


//Ukol a)
file_put_contents('./data/datum.txt', date('d-m-Y'));

//Ukol b)
$number = file_get_contents('./data/cislo.txt');
file_put_contents('./data/cislo.txt', ($number - 10) * 2);


/* 
    Napověda pro bod c)
        Využijte funkci explode PHPDoc: http://php.net/manual/en/function.explode.php
        explode(PHP_EOL, $file_content) ---> vrátí pole, kde prvkem pole je řádek souboru .csv
        explode(',', $file_lines[0]) ---> vrátí pole s prvky, které jsou v souboru oddělené čárkami
*/


// Ukol c)
$file_content = file_get_contents('./data/osoby.csv');
$file_lines = explode(PHP_EOL, $file_content);

$persons_age = 0;
for ($file_line = 1; $file_line < count($file_lines) - 1; $file_line++) {
    $person_data = explode(',', $file_lines[$file_line]);
    $persons_age += $person_data[2]; 
}

echo "Prumerny vek osoby je: " . ($persons_age / (count($file_lines) - 1));


// Ukol d)
$number = 19022017;
echo sprintf("\n%b, %o, %X\n", $number, $number, $number);

// Ukol e)
$operation = 'Deleni';
$result = 10 / 3;
echo sprintf("%s, %.2f\n", $operation, $result);
