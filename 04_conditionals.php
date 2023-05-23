<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to

  === Identical to - strict equality, value and type.
  .when comparing primitvies checks if values are same
  .when comparing objects or arrays checks if the operands refer to the same object or array in memory

  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 17;

/* if($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'Sorry, you are not old enough to vote';
} */

//php date function - H is hour of day.
$t = date("H");

/* if($t < 12) {
    echo 'Good Morning';
} elseif($t < 18) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
} */

if(true) {
  //  echo 123;
}

$posts = ['First Post'];

/* if (!empty($posts)){
 echo $posts[0];
} else {
 echo 'Sorry no posts';
} */

//empty function checks if a variable is considered empty. returns a boolean.

//php has logical operators like JS; && - || - ! . 

$first_post = !empty($posts) ? $posts[0] : 'No Posts';
//echo $first_post;

//coelising operating - primarily used when you want to provide a default value when a variable is 'nul' or not set
$second_post = $posts[1] ?? "Jumangi";

echo $second_post;

//Swith statement

$fav_color = 'Green';

switch($fav_color) {
    case 'red':
        echo 'Your favourite color is red';
        break;
    case 'blue':
        echo 'Your favourite color is blue';
        break;
    case 'Green':
        echo 'Your favourite color is green';
        break;
    default:
    echo 'Your favourite color is not red, blue or green';    
}





