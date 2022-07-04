<?php

// Connexion à une base de données
$host = "localhost";
$dbname = "sc10";
$charset = "utf8";

$dsn ="mysql:host=$host;dbname=$dbname;charset=$charset";

$user = "root";
$pwd = "root";

try {
    $pdo = new PDO($dsn, $user, $pwd);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>