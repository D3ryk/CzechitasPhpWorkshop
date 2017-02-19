<?php


$numbers = [2, 9, 23, 65, 16, 22, 103, 1, 6, 72];

$fruits = [
    'Banan',
    'Pomeranc',
    'Kiwi',
    'Jablko',
    'Jahody',
    'Hrozny',
    'Mango'
];

echo "Ukol a)\n";

for ($num = 1; $num <= 9; $num++) {
    echo $num . "\n";
}


echo "Ukol b) \n";
$total_count = 0;
foreach ($numbers as $number) {
    $total_count += $number;
}

echo $total_count . "\n";


echo "Ukol c)";
foreach ($numbers as $number) {
    if (($number % 2) == 0) {
        echo $number . "\n";
    }
}

echo "Ukol d)\n";
$fruit_count = 0;
foreach ($fruits as $fruit) {
    $fruit_count = $fruit_count + 1;
}
echo $fruit_count . "\n";


echo "Ukol e)\n";
foreach ($fruits as $fruit_key => $fruit_value) {
    if ($fruit_key == '') {
        echo $fruit_value . "\n";
    }
}

echo "Ukol f)\n";
for ($i = count($fruits) - 1; $i > 0; $i--) {
    echo $fruits[$i] . "\n";
}
