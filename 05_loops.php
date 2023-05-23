<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($i = 0; $i <= 10; $i++){
//   echo 'Number ' . $i . '<br>';
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;
// while($x <= 15) {
//     echo 'Number ' . $x . '<br>';
//     $x++;
//     // $x = $x + 1;

// }


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$x = 6;

/* do {
    echo 'Number ' . $x . '<br>';
    $x++;
} while($x <= 5); */


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

/* //for loop
for($x = 0; $x < count($posts); $x++) {
  echo $posts[$x];
} */

/* foreach($posts as $post){
  echo $post . '<br>';
}

foreach($posts as $index => $post){
  echo $index + 1 . ' - ' . $post . '<br>';
} */

//when working with associative arrays

$person = [
  'first_name' => 'Daniel',
  'last_name' => 'Clough',
  'email' => 'dan@mail.com'
];

foreach($person as $key => $value) {
  echo "$key - $value<br>";
}


