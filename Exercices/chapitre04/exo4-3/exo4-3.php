<?php

/*
    ! Distributeur de boissons (Pseudo-Code)
    Réaliser l’algorithme d’un distributeur de boissons. 
    Ce dernier propose plusieurs boissons et l’utilisateur choisit celle 
    qu’il désire en entrant le numéro correspondant. 
    Ne pas oublier de vérifier s’il y a encore des boissons en stock.
*/

// Variables
$message = "";


// Gestion des stocks

$stockB1 = 0; // coca
$stockB2 = 5; // fanta
$stockB3 = 10; // cafe

// Programme
if ( isset($_POST["boisson"]) ) {

    $boisson = $_POST["boisson"];

    $message = "<p>Boisson sélectionnée : $boisson</p>";

    // Vérification du stock de la boisson

    switch ($boisson) {
        case 'coca':
            if ($stockB1 > 0) {
                // $message = $message . "<p></p>";

                $message .= "<p>Voici votre boisson</p>";
                // $stockB1 = $stockB1 - 1;
                // $stockB1 -= 1;
                $stockB1 --;
            }
            else {
                $message .= "<p>Désolé, il n'y a plus de stock</p>";
            }
            break;
        
        case 'fanta':
            if ($stockB2 > 0) {
                $message .= "<p>Voici votre boisson</p>";
                $stockB2 --;
            }
            else {
                $message .= "<p>Désolé, il n'y a plus de stock</p>";
            }
            break;
        
        case 'cafe':
            if ($stockB3 > 0) {
                $message .= "<p>Voici votre boisson</p>";
                $stockB3 --;
            }
            else {
                $message .= "<p>Désolé, il n'y a plus de stock</p>";
            }
            break;
        
    }

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercice 4.3 - Distributeur de boissons</title>
</head>

<body>

    <h1>Distributeur de boissons</h1>

    <form action="exo4-3.php" method="post">

        <input 
            type="radio" 
            name="boisson" 
            id="coca"
            value="coca"
            <?= (isset($_POST["boisson"]) && $boisson == "coca") ? "checked" : "" ?>
        >
        <label for="coca">Coca (x<?= $stockB1 ?>) </label>

        <br>

        <input 
            type="radio" 
            name="boisson" 
            id="fanta"
            value="fanta"
            <?= (isset($_POST["boisson"]) && $boisson == "fanta") ? "checked" : "" ?>
        >
        <label for="fanta">Fanta (x<?= $stockB2 ?>)</label>

        <br>

        <input 
            type="radio" 
            name="boisson" 
            id="cafe"
            value="cafe"
            <?= (isset($_POST["boisson"]) && $boisson == "cafe") ? "checked" : "" ?>
        >
        <label for="cafe">Café (x<?= $stockB3 ?>)</label>

        <br>

        <input type="submit" value="Choisir">

        <?= $message ?>

    </form>

</body>

</html>