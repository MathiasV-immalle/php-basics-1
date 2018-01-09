<?php

$waarde = 3;
$Waarde = 8;

if($waarde == 3) {
    echo "Variable-names are case-sensitive";
} else if($waarde == 8) {
    echo "Variable-names are case-insensitive";
}
// De waardes zijn dus weldegelijk case-sensitive!

echo "<br>";
echo '$waarde';
echo "<br>";
echo "$waarde";
echo "<br>";
// tussen double quotes kan je dus variabelen afdrukken (met $), tussen sigle quotes niet!

if($val == null) {
    echo "<p>$val is not defined.</p>";
}
// $val is nog niet gedefinieerd en zal dus null zijn. 

// Print de string "De waarde van $waarde is 3." 
// door maar 1 keer gebruik te maken v.d. concatenatie-operator
// en de juiste soort quotes: single (') of double (").
// Je kan dit zelfs oplossen ZONDER de concatenatie-opeartor
// te gebruiken als je $ kan escapen.

echo '<p>de waarde van $waarde is ' . "$waarde.</p>";
echo "<p>de waarde van \$waarde is $waarde.</p>";
//let op de single én double quotes!


?>
