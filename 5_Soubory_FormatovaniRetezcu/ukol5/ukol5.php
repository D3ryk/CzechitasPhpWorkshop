<?php



/* 
    Napověda pro bod c)
        Využijte funkci explode PHPDoc: http://php.net/manual/en/function.explode.php
        explode('\n', $file_content) ---> vrátí array, kde prvkem array je řádek souboru .csv
        explode(',', $file_line) ---> vrátí array s prvky, které jsou v souboru oddělené čárkami
*/

$file_content = file_get_contents('./osoby.csv');

/*for(...) {
    
}*/
