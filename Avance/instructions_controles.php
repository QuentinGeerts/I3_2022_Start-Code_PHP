<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    /**
     * BREAK : Permettre l'annulation de la boucle
     * A utiliser avec parcimonie
     */

    $i = 0;

    echo "BREAK Avant la boucle";
    
    while ($i < 10) {
        
        if ($i == 3) break;
        
        echo "<p>$i</p>";
        $i ++;
    }
    
    echo "BREAK Après la boucle<br>";

    /**
     * CONTINUE : Permettre l'annulation de l'itération
     */

    echo "CONTINUE Avant la boucle";
    
    for ($i=0; $i < 10; $i++) { 

        if ($i == 3) continue;
        
        echo "<p>$i</p>";
    }
    
    echo "CONTINUE Après la boucle";

    ?>

</body>

</html>