<?php

const NB_VALUES = 6;

if ( isset( $_POST['sent'] ) ) {

    $message = "<p>Les valeurs entrées sont : [";

    for ($i=0; $i < NB_VALUES; $i++) { 
        $tab[$i] = $_POST['nb' . ($i + 1)];
        $message .= $tab[$i];
        if ($i < NB_VALUES - 1) $message .= ", ";
    }

    $message .= "]</p>";

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

    <h1>Exercice 6.1</h1>

    <p>
        Consigne <br>
        Écrire un algorithme qui enregistre 6 entiers et les stocke dans un tableau, puis affiche le contenu de ce tableau une fois qu’il est rempli.
    </p>

    <?= $message ?>

    <form action="exo6-1.php" method="post">


        <?php
        
        for ($i=1; $i <= NB_VALUES; $i++) {
            echo "<label for='nb$i'>Nombre $i :</label> <br>";
            echo "<input type='number' name='nb$i' id='nb$i'> <br>";
        }
        
        ?>

        <input type="submit" value="Envoyer" name="sent">
        

    </form>

</body>

</html>