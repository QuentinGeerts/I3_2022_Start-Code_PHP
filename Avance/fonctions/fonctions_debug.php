<?php

$tableau = array(1, 2, 3, 4, 5);

for ($i = 0; $i < count($tableau); $i++) {
    if ($tableau[$i] == 3) {
        // die // exit;
        exit("Y a eu une erreur");
    }
    echo "$tableau[$i]<br>";
}
echo "Fin";
