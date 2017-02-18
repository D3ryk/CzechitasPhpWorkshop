Vytvořte program, který provede následující operace:

a) Vytvoří soubor s názvem ./data/datum.txt, který bude obsahovat dnešní datum. Pro získání aktuálního data použíjte funkci date('d-m-Y'); (http://php.net/manual/en/function.date.php).
b) Přečte číslo ze souboru ./data/cislo.txt, uloží do proměnné $readed_number, odečte od něj 10, vynásobí 2 a výsledek uloží zpět do souboru.
c) Načte obsah souboru ./data/osoby.csv a spočítá průměrný věk osoby, výsledek vypište.
d) Za použití funkce sprinf vypiše řetězec, který bude obsahovat číslo 19022017 převedené do binární, osmičkové a hexadecimální soustavy. Převedená čísla oddělte čárkou.
e) Provede libovolnou aritmetickou operaci, uloží její název a výsledek do proměných $operation a $result. 
Následně naformátuje řetězec, který bude obsahovat název operace a její výsledek zaokrouhlený na dvě desetiná místa.
Pro formátování použije funkci sprintf, výsledek formátovací funkce vypíše.


Pro manipulaci se souboru doporučuji využít funkce file_get_contents a file_put_contents. Názvy souborů obsahují relativní cesty k souborům např. ./data/datum.txt, zahrují tedy i název adresáře, kde jsou/budou soubory uložené. Nezapomeňte adresáři data nastavit práva 777.
