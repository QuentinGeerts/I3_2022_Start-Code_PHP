<?php

// 2 ** 1 = 2
// 2 ** 2 = 4
// 2 ** 3 = 8

$base = 2;
$exposant = 1;
$resultats = [];

do {

    $resultats[$exposant - 1] = $base ** $exposant;

    $exposant++;
} while ($exposant <= 10);

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

    <h1>Exercice 6.2</h1>
    <p>
        Consigne <br>
        Initialiser un tableau de 10 entiers avec les valeurs 2, 4, 8, 16, 32, 64, 128, 256, 512, 1024 à l’aide
        d’une boucle. Ensuite, à l’aide d’une boucle afficher la valeur de chaque cellule du tableau avec
        l’opération Ecrire().
    </p>

    <?php

    for ($i = 0; $i < count($resultats); $i++) {
        echo $resultats[$i] . "<br>";
    }

    ?>
</body>

</html>