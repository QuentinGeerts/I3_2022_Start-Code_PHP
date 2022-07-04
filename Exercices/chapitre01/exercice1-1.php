<?php

/*
    Exercice 1.1
    Trouvez une méthode permettant d’inverser le contenu de deux variables (du même type évidemment). 
    Si A = 5 et B = 7, après ce traitement A = 7 et B = 5. 
*/

// Déclaration & Affectation (initialisation)
$a = "5";
$b = "7";

// Afficher avant modification
// String interpolation : afficher directement la valeur d'une variable 
// dans une chaine de caractères
echo "<p>Avant : A = $a et B = $b</p>";

// Concaténation
// echo "<p>Avant : A = " . $a . " et B = " . $b . "</p>";

// Traitement (modification)

$temp = $a;

$a = $b;
$b = $temp;

// Afficher après modification
echo "<p>Après : A = $a et B = $b</p>";

?>