<?php
//echo - Output strings, numbers, html etc. Accepts mutliple values
//echo 123, 'hello', 10.5;

//print - works like echo, but can only take a single argument
//print 123;

// print_r() = Print single values and arrays.
//print_r([1, 2, 3]);


//Debugging:

//var_dump() - Returns more info like data type and length
//var_dump('Hello');

//var_export() - similar to var_dump. Outputs a string representaton of a variable
//var_export('Hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Post One'; ?></h1>
     <!-- SHORTHAND -->
    <h1><?= 'Post One'; ?></h1>
</body>
</html>