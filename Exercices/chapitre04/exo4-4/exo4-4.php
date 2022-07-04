<?php

/*
    ! Calculatrice (Pseudo-Code + PHP)
    Réaliser l’algorithme d’une calculatrice basique. 
    L’utilisateur est invité à saisir un nombre, un opérateur et un deuxième nombre. 
    La calculatrice affiche ensuite le résultat. 

*/

$messageErr = "";

if (isset($_POST["nb1"], $_POST["nb2"], $_POST["op"])) {

    $nb1 = $_POST["nb1"];
    $nb2 = $_POST["nb2"];
    $op = $_POST["op"];

    switch ($op) {

        case "+":
            $result = $nb1 + $nb2;
            break;

        case "-":
            $result = $nb1 - $nb2;

            break;

        case "*":
            $result = $nb1 * $nb2;

            break;

        case "/":
            if ($nb2 != 0) $result = $nb1 / $nb2;
            else $messageErr = "<p>Division par 0 impossible</p>";
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4.4 - Calculatrice</title>
</head>

<body>

    <h1>Exercice 4.4 - Calculatrice</h1>

    <form action="exo4-4.php" method="post">
        <input 
            type="number" 
            name="nb1" 
            id="nb1" 
            value="<?= (isset($_POST['nb1'])) ? $nb1 : "" ?>"
        >
        <select name="op" id="op">
            <option value="+" <?= (isset($_POST["op"]) && $op == "+") ? "selected" : "" ?>>+</option>
            <option value="-"<?= (isset($_POST["op"]) && $op == "-") ? "selected" : "" ?>>-</option>
            <option value="*"<?= (isset($_POST["op"]) && $op == "*") ? "selected" : "" ?>>*</option>
            <option value="/"<?= (isset($_POST["op"]) && $op == "/") ? "selected" : "" ?>>/</option>
        </select>

        <input 
            type="number" 
            name="nb2" 
            id="nb2"
            value="<?= (isset($_POST['nb2'])) ? $nb2 : "" ?>"    
        >
        <input type="submit" value="=">
        <input 
            type="number" 
            name="result" 
            id="result" 
            disabled
            value="<?= $result ?>"
        >
    </form>

    <?= $messageErr ?>

</body>

</html>