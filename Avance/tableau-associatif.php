<?php

$eleves = array(
    "EL000001" => array("Quentin", new DateTime("1996-04-03")),
    "EL000002" => array("Anais", new DateTime()),
    "EL000003" => array("Nael", new DateTime()),
    "EL000004" => array("Héloise", new DateTime()),
    "EL000005" => array("Zakaria", new DateTime()),
    "EL000006" => array("Assiya", new DateTime()),
    "EL000007" => array("Ramona", new DateTime()),
);

// foreach ($eleves as $eleve) {
//     echo "<h3>Élève xxxxxxx </h3>";
//     echo "<p>{$eleve[0]}</p>";
//     echo "<p>{$eleve[1]->format("d/m/Y")}</p>";
// }

//       Structure as key => value
foreach ($eleves as $matricule => $eleve) {
    echo "<h3>Élève $matricule </h3>";
    echo "<p>{$eleve[0]}</p>";
    echo "<p>{$eleve[1]->format("d/m/Y")}</p>";
}

?>