<?php

/*
    Create
  * Read
        - 1 seul élément
  *     - tous les éléments
    Update
    Delete
*/

// Connexion à la base de données
require_once 'dbconnect.php';

$table = "";

// Créer la requête de récupération des données
$query = "SELECT id, nom FROM boisson";

// Demander au PDO de faire une requête à la base de données
$object = $pdo->query($query);

// Transformer l'objet PDOStatement en tableau
// Par défaut : PDO::FETCH_BOTH
$boissons = $object->fetchAll();

print_r($boissons);

// Parcourir les données récupérées dans le PDOStatement
// Afficher chaque champ
if (count($boissons) > 0) {

    foreach ($boissons as $indice => $boisson) {
        // $boisson["nom"] ou $boisson[indice]

        $table .= "<tr>";

        $table .= "<td>" . $boisson[0] . "</td>";
        $table .= "<td>{$boisson["nom"]}</td>";

        $table .= "</tr>";
    }
} else {
    $table .= "<tr>";

    $table .= "<td colspan='2'>Aucune boisson</td>";

    $table .= "</tr>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <h1>Récupérer toutes les boissons</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Nom</th>
        </tr>
        <!-- Générer le tableau grâce à PHP -->
        <?= $table; ?>
    </table>

</body>

</html>