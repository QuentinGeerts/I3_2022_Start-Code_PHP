<?php

$chaine = htmlentities('<h2>"Bonjour"</h2>');
$chaine_decode = html_entity_decode($chaine);

echo $chaine;
echo $chaine_decode;


$str = "Bonjour Naël";
echo $str;

$new_str = str_replace("Naël", "Anaïs", $str);
echo $new_str;

$str_2 = "\t\tMon    texte     ";

echo "<br>";

$str_2_trimmed = trim($str_2);
echo "<br>";
var_dump($str_2);
echo "<br>";
var_dump($str_2_trimmed);

?>