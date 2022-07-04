<?php
/*
$personnes_presentes = array("Quentin", "Anais", "Nael");
$personnes_absentes = array("Zakaria", "Héloise", "Ramona");

$nbEtudiants = 6;
var_dump($personnes_presentes);
echo "<br>";
print_r($personnes_presentes);
echo "<br>";

var_dump($nbEtudiants);

echo "<br>";
print_r($nbEtudiants);

*/

$str = "Bonjour à toutes et à tous.";

// ["Bonjour", "à", "toutes", "et", "à", "tous."]
$tab = explode(" ", $str); 

// Bonjour-à-toutes-et-à-tous.
$str_built  = implode("-", $tab);


$info = array('coffee', 'brown', 'caffeine');

// Liste toutes les variables
// list($drink, $color, $power) = $info;
list($drink, , $power) = $info;
echo "$drink is $color and $power makes it special.\n";
