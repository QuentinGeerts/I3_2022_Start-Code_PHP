<?php

$personnesPresentes = "";
$indice = 0;

$presents = ["Anaïs", "Naël", "Quentin", "Zakaria"];

while ( $indice < sizeof($presents) ) {
    $personnesPresentes .= "<li>" . $presents[$indice ++] . "</li>";
    // $indice ++;
    // $indice += 1;
    // $indice = $indice + 1;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Personnes présentes :</h1>

    <ul>
        <?= $personnesPresentes ?>
    </ul>

</body>

</html>