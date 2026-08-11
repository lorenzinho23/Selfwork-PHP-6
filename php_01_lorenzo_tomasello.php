<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$somma = 0;
$contatore = 0;

foreach ($numbers as $numero) {

    if ($numero % 2 == 0) {
        $somma = $somma + $numero;
        $contatore++;
    }
}

echo $somma / $contatore;
