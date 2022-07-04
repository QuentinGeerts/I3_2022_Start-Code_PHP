<?php

// Commentaire single line

/*
    Commentaire multiple line
*/


// Déclaration = Réservation de l'emplacement en mémoire
// Pour déclarer une variable, vous devez ajouter avant le nom : $
// Et terminer l'instruction : ;
$prenom;


/*
    Les constantes
    => Variable où la valeur ne varie pas
*/

const PI = 3.14159265359;

// Impossible car constante
// PI = 32;

/*
    L'affectation
    => donner une valeur à une variable
*/

$nom = "Geerts";
$prenom = "Quentin";
$age = 26;
$taille = 163.5; // <!> "." <!> => "," = séparateur d'éléments
$estAbsent = false;


// Remplacement de l'ancienne valeur par la nouvelle
$nom = "MonNom";

/*
    Pour afficher sur la page 
*/

echo "mon texte";
echo $nom;

// Concaténation : coller une valeur avec une autre
echo "mon texte : " . $nom; 

?>
