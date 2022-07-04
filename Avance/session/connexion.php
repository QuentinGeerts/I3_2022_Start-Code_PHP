<?php

// Démarrer la session
session_start();

$message = "";

// Vérifier si le formulaire a été soumis 
// et que la valeur du champ pseudo existe
if (isset($_POST["pseudo"])) {

    if(!empty($_POST["pseudo"])) {
        $pseudo = $_POST["pseudo"];

        // Dans le cas où la variable de session n'existe pas
        // On la crée
        // Sinon
        // On informe que la variable de session existe
        if ( !isset($_SESSION["pseudo"]) ) {
            $_SESSION["pseudo"] = $pseudo;
            header("Location: index.php");
        }
        else {
            echo "La variable de session existe déjà.";
        }
    }
    else {
        $message = "<p>Vous devez rentrer un pseudo.</p>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion</h1>

    <form action="connexion.php" method="post">
        <label for="pseudoId">Pseudo :</label>
        <input type="text" name="pseudo" id="pseudoId">

        <input type="submit" value="Se connecter">
    </form>
    <?= $message ?>

</body>

</html>