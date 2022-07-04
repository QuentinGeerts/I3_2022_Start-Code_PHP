<?php

// Tableau 
// Plusieurs emplacement en mémoire sous un seul nom
// Plusieurs variables dans une variable

// Déclaration

// Première façon 
// Utilisation du constructeur d'un tableau : array( ... )
$array1 = array(1, 2, 3); // Création d'un tableau de 3 valeurs : 1, 2, 3
$array1_str = "";

for ($i = 0; $i < count($array1); $i++) {
    $array1_str .= $array1[$i] . " > ";
}

// Deuxième façon
// Utilisation de la déclaration à la volée

$array2 = [5, 1, 3, 4, 6];

$array2_str = "";

for ($i = 0; $i < count($array2); $i++) {
    $array2_str .= $array2[$i] . " > ";
}
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

    <h1>Demo Tableau</h1>

    <?= "<p>" . $array1_str . "</p>" ?>

    <?= "<p>" . $array2_str . "</p>" ?>

</body>

</html>