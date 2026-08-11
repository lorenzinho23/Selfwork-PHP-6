<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Anna', 'surname' => 'Bianchi', 'gender' => 'F'],
];

foreach ($users as $user) {

    if ($user['gender'] == 'M') {
        echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "<br>";
    } elseif ($user['gender'] == 'F') {
        echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "<br>";
    } else {
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "<br>";
    }
}
