<?php

// Déclaration
// $nombre;
$message = "";
for ($nombre = 1 ; $nombre <= 10; $nombre++) { 
    
    $message .= $nombre . " ";

}

$array = [1, 7, 9, 1, 3, 4, 8, 7, 2, 5]; // 6 éléments dans le tableau
//        0  1  2  3  4  5

$message2 = "<p>[";

//    initia.      condition      incrémentation
for ($i = 0 ; $i < count($array); $i++) { 
    $message2 .= $array[$i];

    if ($i < count($array) - 1) $message2 .= ", ";
}

$message2 .= "]</p>";

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

    <h1>Demo POUR</h1>

    <?= $message; ?>

    <?= $message2; ?>

</body>

</html>