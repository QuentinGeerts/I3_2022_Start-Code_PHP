<?php

/*
    À l’aide d’une boucle, afficher la table de multiplication par 2.
*/

$reponse = "";

$resultat = 0;
$table = 2;
// Initialisation
$multiplicateur = 1;

// Condition
while ( $multiplicateur <= 10 ) {
    $resultat = $multiplicateur * $table;
    $reponse .= "<p>" . $multiplicateur . " * " . $table . " = " . $resultat . "</p>";

    // Incrémentation / modification
    $multiplicateur ++;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5.1 - Table par 2</title>
</head>

<body>

    <h1>Exercice 5.1 - Table par 2</h1>

    <?= $reponse ?>

</body>

</html>