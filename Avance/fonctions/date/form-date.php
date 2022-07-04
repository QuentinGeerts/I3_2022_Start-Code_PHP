<?php

$date_stringify = "";

if (isset($_POST["date"])) {

    $date = $_POST["date"];

    $object = new DateTime($date);
    $format = "d/m/Y";

    $date_stringify = date_format($object, $format); 
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <form action="form-date.php" method="post">

        <label for="date">Date :</label>
        <input type="datetime-local" name="date" id="date">

        <input type="submit" value="Envoyer">

    </form>

    <?= $date_stringify; ?>

</body>

</html>