<?php

$nbFruits = 12;

$nom = "Quentin";

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

    <p>Quantité : <?= $nbFruits ?> <?= ($nbFruits  > 1) ? 'fruits' : 'fruit'?></p>


    <p>
        Bonjour <?= empty($nom) ? 'Anonyme' : $nom; ?>
    </p>

</body>

</html>