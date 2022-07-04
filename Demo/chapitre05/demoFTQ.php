<?php

$run = false;
$message = "";

// Boucle à test antérieur = test avant d'exécuter
// while ($run) {
//     $message = "Passé dans la boucle";
//     $run = false;
// }

// Boucle à test postérieur = test après avoir exécuté
do {
    $message = "Passé dans la boucle";
} while (false);

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

    <h1>Demo Faire ... Tant Que</h1>

    <?= $message ?>

</body>

</html>