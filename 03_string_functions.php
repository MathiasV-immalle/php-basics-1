<?php

echo $zin = "Binnenkort is het weeral lente!";

// Print af hoeveel woorden $zin bevat.
$aantal = str_word_count($zin);
echo "<p>De vorige zin bevat $aantal woorden!</p>";

// Vervang in $zin "lente" door "zomer" en druk af.
$newword = "zomer";
$zin = str_replace("lente", $newword, $zin);
echo "<p>$zin<p>"

?>
