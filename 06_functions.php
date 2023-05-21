<?php
function register_user($email) {
    echo $email . ' User registered';
}

//register_user('dan@mail.com');

//functions can echo values and also return them
//function params can have default values.
function sum($n1 = 4, $n2 = 5) {
    return $n1 + $n2;
}

//$number = sum(5, 5);

//dont need arguments here because we have default param values. 
$number = sum();
//echo $number;

//anonymous funciton saved as a variable
$subtract = function($n1, $n2){
    return $n1 - $n2;
};

//echo $subtract(10, 5);

/* 
.Arrow functions (also known as short closures)
.Concise way to define anonymous function with a single expression
.Good for callbacks or passing as an argument to another function HOF.
.They can also be used to encapsulate logic within a specific scope without polluting global namespace.
.Anonymous functions can create closures, meaning they have access to variables .defined outside their scope. This allows them to "capture" variables from their surrounding context, even after the original scope has ended.
 */

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(9, 9);