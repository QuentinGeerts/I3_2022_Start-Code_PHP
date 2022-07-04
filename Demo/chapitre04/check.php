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

    if (isset($_POST["pseudo"])) {   
        $pseudo = $_POST["pseudo"];
        echo "Bienvenue $pseudo !";    
    }

    else {

        echo '<form action="check.php" method="post">';
        echo '<label for="pseudo">Pseudo :</label>';
        echo '<input type="text" name="pseudo" id="pseudo">';
        echo '<input type="submit" value="Se connecter">';

    }
    ?>

        
    </form>

</body>

</html>