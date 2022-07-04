<?php

/*
    Exercice 1
    Réalisez une fonction calculant le carré d’un nombre entier donné en paramètre.

*/

function carre($nb) {
    // Variable locale 
    // = accessible que dans le bloc où elle a été déclarée
    $resultat = $nb * $nb;
    return $resultat;

    // return $nb * $nb;
}

$resultat = carre(5);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?= $resultat; ?>

</body>

</html>