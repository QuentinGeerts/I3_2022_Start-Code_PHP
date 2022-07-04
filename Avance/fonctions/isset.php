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

    if (!isset($_POST["login"])) {
        echo '<form action="isset.php" method="post">';
        echo '<input type="text" name="login" id="login" placeholder="Login">';
        echo '<input type="submit" value="Se connecter">';
        echo '</form>';
    } else {
        $login = $_POST["login"];
        echo "<p>Bonjour $login</p>";
    }

    ?>

</body>

</html>