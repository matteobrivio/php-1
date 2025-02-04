<?php

// esercizio 1

$integer = 1;
$float = 1.23;
$string = 'ciao';
$boolean = true;
var_dump($integer,$float,$string,$boolean);

const INTERO = 10;
const FLOATT = 1.23;
const STRINGA = 'CIAO';
const BOOLEANO = true;

var_dump(INTERO, FLOATT, STRINGA, BOOLEANO);

// esercizio2

$text1 = 'Marco';

$text2 = 'hai';

$text3 = 'sete';

$text4 = '?';

$text5 = 'Perchè';

$text6 = 'hai';

$text7 = 'bevuto';

$text8= "tutto ";

$phrase = $text1 . " " .$text2 . " " . $text3  . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8;
echo($phrase);

// esercizio 3

$words1 = [

    'vostro', 67, 'essere', 'colle', 'mi', 'sempre', 
    [

    'oscura', 'era', 89, ['mezzo', 'E'],

    'ritrovai', 'per'

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

    ['Fortuna']

],

'fine'=>'!'

];
var_dump($words1[5]);
var_dump($words2['elemento3'][3][0]);

$result = $words1[6][3][1] . " " .$words2['elemento2']. " " . "la" . " " .  $words2['elemento3'][3][0] . " " . $words1[2]. " ". $words1[5]." " . "a" ." ". $words1[0] ." ". $words2['elemento3'][2];
echo($result);

// esercizio bonus

$words3 = [

    'una',
    
    67,
    
    'vita',
    
    'colle',
    
    'mi',
    
    'rosso',
    
    [
    
    'oscura',
    
    'era',
    
    89,
    
    [
    
    'mezzo',
    
    [
    
    'cammin',
    
    'Nel',
    
    [
    
    'selva',
    
    'la',
    
    [
    
    'via',
    
    'una',
    
    true,
    
    ]
    
    ],
    
    ]
    
    ],
    
    'ritrovai',
    
    'per'
    
    ],
    
    'diritta'
    
    ];
    
    
    
    $words4 = [
    
    'elemento1' => 25.89,
    
    'elemento2' => 'nostra',
    
    'elemento3' => [
    
    'Virgilio',
    
    'smarrita',
    
    'ché'
    
    ]
    
    ];

    var_dump($words3[6][3][1][0]);
    var_dump($words4['elemento3'][1]);

    $risultato = $words3[6][3][1][1] . " " .$words3[6][3][0] . " ". "di". " " . $words3[6][3][1][0] .  " " . "di" . " " . $words4['elemento2'] . " " . $words3[2] . " " . $words3[4] . " " .$words3[6][4] . " ". $words3[6][5] . " " . $words3[6][3][1][2][2][1] . " " . $words3[6][3][1][2][0] . " " . $words3[6][0] . "," . " " . $words4['elemento3'][2] . " " . $words3[6][3][1][2][1] . " " . $words3[7] . " " . $words3[6][3][1][2][2][0] . " " . $words3[6][1] . " " . $words4['elemento3'][1]  ; 

    var_dump($risultato);
?>