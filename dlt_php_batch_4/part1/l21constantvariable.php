<?php

// => Constant Variable

# Note that there is another type of constant variable named 'defined' but it is barely used.

define("variablename", "value");
// string/integer/float/boolean are all okay
// variablename should be uppercase
// cannot be redefined or are immutable

define("FULLNAME", "Honey Nway Oo");
echo FULLNAME; // Honey Nway Oo

define("FULLNAME", "Ma Ma Mya");
echo FULLNAME; // Honey Nway Oo

//---------------------

# Constant variable can be used in connecting database.
# You can see the example as below.

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "1234");
define("DB_NAME", "phpdbone");

echo DB_HOST;
echo "<br/>";
echo DB_USER;
echo "<br/>";
echo DB_PASS;
echo "<br/>";
echo DB_NAME;

//---------------------

// => constant("variablename") Function
# constant() function is only avaiable for constant variables and cannot be used to output normal mutable variables.

echo constant("DB_HOST");
echo "<br/>";
echo constant("DB_USER");
echo "<br/>";
echo constant("DB_PASS");
echo "<br/>";
echo constant("DB_NAME");

//---------------------

// =>constant : const keyword
// string/integer/float/boolean are all okay
// variablename should be uppercase
// cannot be redefined or are immutable

const MESSAGE = "Hello sir, are you ready to learn PHP OOP Concept? ";
echo MESSAGE;
echo constant("MESSAGE"); // Hello sir, are you ready to learn PHP OOP Concept?

const MESSAGE = "Hello sir, are you ready to learn Javascript ES6 Concept? ";
echo MESSAGE; // Hello sir, are you ready to learn PHP OOP Concept?
echo constant("MESSAGE"); // Hello sir, are you ready to learn PHP OOP Concept?
