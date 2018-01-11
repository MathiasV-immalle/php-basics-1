<?php

// Maak een Array met 3 namen van medeleerlingen.
$namen = array("jef","jan","jos");

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.

echo "<p>Met een for-loop itereren over een array:<br>";
echo "(unordered list)</p>";
echo "<ul>";
for ($x = 0; $x < count($namen); $x++){
	echo "<li>$namen[$x]</li>";
}
echo "</ul>";

// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.

echo "<p>Met een foreach-loop itereren over een array:<br>";
echo "(ordered list)</p>";
echo "<ol>";
foreach($namen as $value){
	echo "<li>".$value."</li>";
}
echo "</ol>";

// Itereer met een for-loop over de variable $naam alsof het een array was.

$naam = "Willy";
echo "<ul>";
for ($x = 0; $x < strlen($naam); $x++){
	echo "<li>$naam[$x]</li>";
}
echo "</ul>";

?>
