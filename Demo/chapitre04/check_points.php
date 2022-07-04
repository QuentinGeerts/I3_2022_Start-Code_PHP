<?php

$points = $_POST["points"];

if ($points < 0 || $points > 20) {
    echo "[ERREUR] Les points doivent être compris entre 0 et 20.";
}
elseif (!is_numeric($points)) {
    echo "[ERREUR] Les points doivent être des nombres.";
}
else {
    // Les points sont valides

    if ($points >= 10) echo "Vous avez réussi";
    else echo "Vous avez raté";
}
