<?php

/*
    Lanceur de balles de tennis (Pseudo-Code)
    Réaliser l’algorithme d’un lanceur de balles de tennis. 
    Ce lanceur possède deux états :

    – prêt : permet de savoir si le tennisman est prêt. 
      Il ne faut pas lancer de balles dans le cas contraire
    
    – panierVide : permet de savoir s’il y a encore des balles
      disponibles 
    
    Le lanceur de balle possède l’opération « lancerBalle » qui, vous l’aurez compris, permet de lancer une balle.    
*/

$message = "";

if ( isset($_POST["balleSubmit"]) ) {
    $pret = $_POST["pret"] ? true : false;
    $panierVide = $_POST["panierVide"] ? true : false;

    if ($pret && !$panierVide) {
        // Lancer la balle
        $message .= "<p>Vous lancez la balle</p>";

    }
    else {
        // Ne pas lancer la balle
        $message .= "<p>Vous ne lancez pas la balle</p>";

        $message .= "<ul>";

        if (!$pret) $message .= "<li>Car vous n'êtes pas prêt.</li>";
        if ($panierVide) $message .= "<li>Car le panier est vide.</li>";
        
        $message .= "</ul>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4.2 - Lanceur de balles de tennis</title>
</head>

<body>

    <h1>Exercice 4.2 - Lanceur de balles de tennis</h1>

    <form action="exo4-2.php" method="post">
        <input type="checkbox" name="pret" id="pret">
        <label for="pret">Pret ?</label>

        <br>

        <input type="checkbox" name="panierVide" id="panierVide">
        <label for="panierVide">Panier Vide ?</label>

        <br>

        <input type="submit" name="balleSubmit" value="Lancer la balle">
    </form>

    <?= $message ?>

</body>

</html>