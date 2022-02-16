<?php

// What is a variable

// Variable types
// $name = 'Zura';
// $age = 28;
// Declare variables
$name = 'Zura';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;
// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';
// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';
// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary);
// Change the value of the variable
$name = false;
// Print type of the variable
echo  '<br>' . gettype($name) . '<br>';
// Variable checking functions
is_string($name);
is_string($age);
is_string($isMale);
is_string($height);
// Check if variable is defined
isset($name);
isset($address);
// Constants
define('PI', 3.14);
echo PI . '<br>';
// Using PHP built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';
