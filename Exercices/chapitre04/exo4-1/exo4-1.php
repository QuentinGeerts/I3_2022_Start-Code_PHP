<?php

/* 
    Année bissextile (Pseudo-Code + PHP)
    Réaliser un petit algorithme qui sur base d’une année donnée 
    va déterminer s’il s’agit d’une année bissextile. 
    Une année est bissextile si elle est divisible par 4, 
    mais non divisible par 100. Ou si elle est divisible par 400. 
*/
if (isset($_POST["annee"])) {
    $annee = $_POST["annee"];

    $estDivisiblePar4 = $annee % 4 == 0;
    $estDivisiblePar100 = $annee % 100 == 0;
    $estDivisiblePar400 = $annee % 400 == 0;

    if ($estDivisiblePar4 && !$estDivisiblePar100 || $estDivisiblePar400) {
        // année bissextile
        $message = "<p>L'année est bissextile</p>";
    } else {
        // année non bissextile
        $message = "<p>L'année n'est pas bissextile</p>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4.1 - Année bissextile</title>
</head>

<body>

    <h1>Exercice 4.1 - Année bissextile</h1>

    <form action="exo4-1.php" method="post">

        <label for="annee">Année :</label>
        <input type="number" name="annee" id="annee">

        <input type="submit" value="Valider">

    </form>

    <?php // echo $message; ?>
    <?= $message; ?>

</body>

</html>