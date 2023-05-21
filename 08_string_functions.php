<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
echo ucwords($string);

// String replace
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with - returns boolean
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

// HTML Entities - used for security and wont parse html.
//special chars is similar and used for form data so that people cant enter JS scripts
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
//similar to PGformat when using postgreSQL
printf('%s is a %s', 'Daniel', 'nice guy');
printf('1 + 1 = %f', 1 + 1); // float
printf('1 + 1 = %d', 1 + 1); // int