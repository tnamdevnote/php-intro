<?php
/* -------------PHP Data Types ---------------- */
/*
- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

$name = 'Luke'; // String
$age = 30; // Integer
$has_kids = false; // Boolean
$cash_on_hand = 20.75; // Float

// echo $has_kids;
// var_dump($cash_on_hand);


// string concat with variable
// echo $name . ' is ' . $age . ' years old.';

// arithmetic
// $sum = '5' + '5'; // even though 5 is in string, it prints out 10. PHP will still interpret this as number value
// var_dump($sum); // prints int(10)

// echo 10 - 5; // 5
// echo 5 * 6; // 30
// echo 10 / 2; // 5
// echo 10 % 3; // 1

// constant variable
// define(variableName, value);
define('HOST', 'localhost');
define('DB_NAME', 'planetscale');
define('AGE', 10);

echo AGE;
