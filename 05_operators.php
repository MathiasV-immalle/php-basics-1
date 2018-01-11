<?php

// Bereken de rest bij gehele deling van 10 door 3.

$x = 10 % 3;
echo "<p>$x is de rest bij een gehele deling van 10 door 3.<p>";

// Bereken de 5e macht van 2.

$y = 2 ** 5;
echo "<p>$y is de uitkomst wanneer men de 5de macht van 2 berekent.</p>";

$var_a = "123";
$var_b = 123;

// Vervang de true in de if-voorwaarden zodat het klopt wat er staat:

if($var_b != $var_b) {
    echo '$var_a en $var_b zijn aan elkaar gelijk maar zijn niet van hetzelfde type.';
}

if($var_b == $var_b) {
    echo '$var_a en $var_b zijn aan elkaar gelijk en van hetzelfde type.';
}

?>
