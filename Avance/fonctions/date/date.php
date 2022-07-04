<?php

// Récupération de la date locale actuelle
$today = date("d/m/Y");
$today2 = date("c");
$today3 = date("r");
$today4 = date("U");

echo "<p>$today</p>";
echo "<p>$today2</p>";
echo "<p>$today3</p>";
echo "<p>$today4</p>";


// Création d'une date
$birthdate = new DateTime("1996-04-03 17:45:32");
echo "<h1>Ma date de naissance</h1>";
echo "<p>" . $birthdate->format("d/m/Y H:i:s") . "</p>";
