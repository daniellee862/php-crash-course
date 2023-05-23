<?php
//simple array

$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

//print_r($numbers);
//var_dump($numbers);

//echo $fruits[0];


//Associative Arrays - used a lot with tabular data.
//similar to a JavaScript Object or Python Dictionary

$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

//echo $colors[4];

$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f'
];

//echo $hex['green'];

$person = [
    'first_name' => 'Daniel',
    'last_name' => 'Clough',
    'email' => 'dan@mail.com'
];

//echo $person['first_name'];


//Mutlidimensional Array / nested array
$people = [
    [
        'first_name' => 'Daniel',
        'last_name' => 'Clough',
        'email' => 'dan@mail.com'
    ],
    [
        'first_name' => 'Fran',
        'last_name' => 'Ferris',
        'email' => 'fran@mail.com'
    ],
    [
        'first_name' => 'Abby',
        'last_name' => 'Clough',
        'email' => 'abs@mail.com'
    ]
    ];

    //echo $people[1]['email'];

    
    //encode array into JSON format
    var_dump(json_encode($people));
 
    //or decode 
    //json_decode()