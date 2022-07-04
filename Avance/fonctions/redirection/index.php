<?php

if (isset($_POST["redirection"])) {

    header("Location:page2.php");
    // header("Location:https://www.php.net/manual/fr/function.header");

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
    <h1>Index</h1>
    <form action="index.php" method="post">
        <input type="submit" value="Aller sur autre page" name="redirection">
    </form>
</body>

</html>