<?php

$fruits = ['apple', 'orange', 'pear'];

//Get length
//echo count($fruits);

//Search
//in_array() - similar to .includes()

//var_dump(in_array('apple', $fruits));

//Add to array 
$fruits[] = 'grape';
//Add to end
array_push($fruits, 'blueberry', 'strawberry');
//Add to start
array_unshift($fruits,'mango' );


//Remove 
//Remove from end
array_pop($fruits);
//Remove from start
array_shift($fruits);
//Remove from specific index - removes element and its index
//unset($fruits[2]);

//Split into 2 chunks
//array_chunk() creates a new array containing these smaller chunks as seperrate elements
//$chunked_array = array_chunk($fruits, 2);

//print_r($chunked_array);


//print_r($fruits);

//Merge Arrays. Cant use + operator to concat arrays like js.

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);

//we can also use the spread operator for merging arrays.
$arr4 = [...$arr1, ...$arr2];

//print_r function is specifically designed to display the detailed structure of an array, echo will attempt to convert the array to a string (try to convert primatives and non-primative types)
//print_r($arr4);


//Combine arrays - use elements of one array as keys and elements of another as values. 

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

//print_r($c);


//Print keys. 
$keys = array_keys($c);
//print_r(($keys));

//flip array - flips the keys and values of an array
$flipped = array_flip($c);
//print_r($flipped);

$numbers = range(1, 20);
//print_r($numbers);

//map - smililar to js higher order array method .map(()=>)
/*  array_map(function($iterative){
    return "this is the ${iterative}"
}); */

$new_numbers = array_map(function($number) {
    return "Number {$number}";
}, $numbers);

//print_r($new_numbers);


//Array Filtering
//array_filter() takes an array and a callback function, can use shorthand arrow syntax
$less_than_10 = array_filter($numbers, fn($number) =>
$number <= 10);
//when conditional expression inside the callback evaluates to true the callback will return the element at the particular index, like .filter() in js

//print_r($less_than_10);


/* Array Reduce
allows you to iterate over an array and reduce it to a single value by applying a callback function. The callback function takes two arguments: the accumulator and the current value from the array. */

$array = [1, 2, 3, 4, 5];

$sum = array_reduce($array, fn($accumulator, $value) =>
$accumulator + $value);

//or function declaration as callback.

$sum_two = array_reduce($array, function ($accumulator, $value) {
    return $accumulator + $value;
});

echo $sum;  // Output: 15
var_dump($sum_two);

