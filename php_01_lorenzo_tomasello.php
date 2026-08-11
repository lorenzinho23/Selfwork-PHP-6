<?php

$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            'E'
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['fortuna']
    ],
    'fine' => '!'
];

$words1[] = 'la';
$words1[] = 'a';

$results = "Nel " . $words1[6][3][0] . " del cammin di nostra vita " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " una selva " . $words1[6][0] . ", ché la " . $words1[7] . " via era smarrita";

echo $results;
