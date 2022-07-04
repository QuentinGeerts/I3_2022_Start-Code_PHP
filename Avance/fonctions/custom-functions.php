<?php

/*
    Sous-programmes

    2 types : 
        - Procédure => Ne renvoie rien
        - Fonction => Renvoie qq'chose

    ! fonction
    function nomSP([parametre[, parametre]]) {
        bloc d'instructions
        return ...;
    }

    ! procédure
    function nomSP([parametre[, parametre]]) {
        bloc d'instructions
    }
*/

// Déclaration - Fonction
function bonjour(string $nom) : string {
    return "<p>Bonjour $nom</p>";
}

// Déclaration - Procédure
function direBonjour(string $nom) : void {
    echo "<p>Bonjour $nom</p>";
}

function direBonjourA($nom1, $nom2) {
    echo "<p>$nom1 dit bonjour à $nom2</p>";
}

// Appel fonction
echo bonjour("Quentin");

$message = bonjour("Nael");
echo $message;

// Appel procédure
direBonjour("Anais");

direBonjourA("Nael", "Anais");

?>