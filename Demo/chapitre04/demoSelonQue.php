<?php

$fruit = "ananas";

switch ($fruit) {

    case "cerise":
        echo "Le prix est de 5.2€ / kg";
        break;
    
    case "poire":
        echo "Le prix est de 7.2€ / kg";
        break;

    case "mangue":
    case "papaye":
        echo "Le prix est de 3.94€ /kg";
        break;
    
    default:
        echo "Le fruit n'est pas reconnu";
}