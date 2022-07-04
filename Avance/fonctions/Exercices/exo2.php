<?php

/*
    Exercice 2
    Réalisez une fonction de recherche dans un tableau. 
    Cette fonction va recevoir un tableau, la taille du tableau et la valeur recherchée en paramètres et renvoyer l’indice de l’élément dans le tableau. 
    Si l’élément ne s’y trouve pas, la fonction renvoie -1.
*/

// 1ere façon

// function recherche(array $tab, int $taille, $valeur): int
// {
//     for ($i = 0; $i < $taille; $i++) {
//         if ($valeur == $tab[$i]) {
//             return $i;
//         }
//     }
//     return -1;
// }

// 2e façon 

function recherche(array $tab, int $taille, $valeur): int
{
    $indice = -1;

    for ($i = 0; $i < $taille; $i++) {
        if ($valeur == $tab[$i]) {
            $indice = $i;
        }
    }

    return $indice;
}

// 3e façon

// function recherche(array $tab, int $taille, $valeur): int
// {
//     $indice = -1;
//     if (array_search($valeur, $tab)) {
//         $indice = array_search($valeur, $tab);
//     }
//     return $indice;
// }

$tableau = array(1, 4, 3, 5, 2);
echo "<p>" . recherche($tableau, count($tableau), 4) . "</p>"; //  1
echo "<p>" . recherche($tableau, count($tableau), 5) . "</p>"; //  3
echo "<p>" . recherche($tableau, count($tableau), 9) . "</p>"; // -1
echo "<p>" . recherche($tableau, count($tableau), 2) . "</p>"; // 4
echo "<p>" . recherche($tableau, count($tableau), 3) . "</p>"; // 2
echo "<p>" . recherche($tableau, count($tableau), 14) . "</p>"; // -1
