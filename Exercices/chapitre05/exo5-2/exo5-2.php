<?php

/*
    À l’aide d’une boucle, afficher la table de multiplication par 2.
*/

$reponse = "";

$resultat = 0;
$table = 1;

while ($table <= 9) {

    $reponse .= "<h2>La table de " . $table . "</h2>";
    // Initialisation
    $multiplicateur = 1;

    // Condition
    while ( $multiplicateur <= 10 ) {
        $resultat = $multiplicateur * $table;
        $reponse .= "<p>" . $multiplicateur . " * " . $table . " = " . $resultat . "</p>";

        // Incrémentation / modification
        $multiplicateur ++;
    }
    $table ++;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5.2 - Tables de multiplication</title>
</head>

<body>

    <h1>Exercice 5.2 - Tables de multiplication</h1>

    <?= $reponse ?>

</body>

</html>