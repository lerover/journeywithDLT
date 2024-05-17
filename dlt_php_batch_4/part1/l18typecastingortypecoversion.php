<?php

// => Data Types
// string
// int
// float
// bool
// array
// object
// unset

// =>Cast to String

$val1 = "hello"; // String
var_dump($val1);
$result = (string) $val1;
var_dump($result);

$val2 = 10; // Integer
var_dump($val2);
$result = (string) $val2;
var_dump($result);

$val3 = 35.46; // Float
var_dump($val3);
$result = (string) $val3;
var_dump($result);

$val4 = true; // Boolean
var_dump($val4);
$result = (string) $val4;
var_dump($result); // true = "1"    false = ""

$val5 = null; // null
var_dump($val5);
$result = (string) $val5;
var_dump($result); // string(0) ""

//-----------------------------------------------------

// =>Cast to Integer

$val1 = "hello"; // String
var_dump($val1);
$result = (int) $val1;
var_dump($result);

$val2 = 10; // Integer
var_dump($val2);
$result = (int) $val2;
var_dump($result);

$val3 = 35.67; // Float
var_dump($val3);
$result = (int) $val3;
var_dump($result); // int(35)

$val4 = true; // Boolean
var_dump($val4);
$result = (int) $val4;
var_dump($result); // true = 1    false = 0

$val5 = null; // null
var_dump($val5);
$result = (int) $val5;
var_dump($result); // int(0)

//-----------------------------------------------------

// =>Cast to Float

$val1 = "hello"; // String
var_dump($val1);
$result = (float) $val1;
var_dump($result); // float(0)

$val2 = 10; // Integer
var_dump($val2);
$result = (float) $val2;
var_dump($result); // float(10)

$val3 = 35.67; // Float
var_dump($val3);
$result = (float) $val3;
var_dump($result); // float(35.67)

$val4 = true; // Boolean
var_dump($val4);
$result = (float) $val4;
var_dump($result); // true = 1    false = 0

$val5 = null; // null
var_dump($val5);
$result = (float) $val5;
var_dump($result); // float(0)

//-----------------------------------------------------

// =>Cast to Boolean

$val1 = "hello"; // String
var_dump($val1);
$result = (bool) $val1;
var_dump($result); // bool(true)

$val2 = 10; // Integer
var_dump($val2);
$result = (bool) $val2;
var_dump($result); // bool(true)

$val3 = 35.67; // Float
var_dump($val3);
$result = (bool) $val3;
var_dump($result); // bool(true)

$val4 = true; // Boolean
var_dump($val4);
$result = (bool) $val4;
var_dump($result); // true = bool(true)    false = bool(false)

$val5 = null; // null
var_dump($val5);
$result = (bool) $val5;
var_dump($result); // bool(false)

//-----------------------------------------------------

// =>Cast to Array

$val1 = "hello"; // String
var_dump($val1);
$result = (array) $val1;
var_dump($result); // array(1) {[0]=>string(5) "hello"}

$val2 = 10; // Integer
var_dump($val2);
$result = (array) $val2;
var_dump($result); // array(1) {[0]=>int(10)}

$val3 = 35.67; // Float
var_dump($val3);
$result = (array) $val3;
var_dump($result); // array(1) {[0]=>float(35.67)}

$val4 = true; // Boolean
var_dump($val4);
$result = (array) $val4;
var_dump($result); // array(1) {[0]=>bool(true)}    |or| if $val4 = false, the result will be   array(1) {[0]=>bool(false)}

$val5 = null; // null
var_dump($val5);
$result = (array) $val5;
var_dump($result); // array(0) { }

//-----------------------------------------------------

// =>Cast to Object

$val1 = "hello"; // String
var_dump($val1);
$result = (object) $val1;
var_dump($result); // object(stdClass)#1 (1) { ["scalar"]=> string(5) "hello"}

$val2 = 10; // Integer
var_dump($val2);
$result = (object) $val2;
var_dump($result); // object(stdClass)#1 (1) { ["scalar"]=> int(10)}

$val3 = 35.67; // Float
var_dump($val3);
$result = (object) $val3;
var_dump($result); // object(stdClass)#1 (1) { ["scalar"]=> float(35.67)}

$val4 = true; // Boolean
var_dump($val4);
$result = (object) $val4;
var_dump($result); // object(stdClass)#1 (1) { ["scalar"]=> bool(true)}

$val5 = null; // null
var_dump($val5);
$result = (object) $val5;
var_dump($result); // object(stdClass)#1 (0) { }

//-----------------------------------------------------

// =>Cast to Unset
// unset method is no longer supported in version 8.0 and later

$val1 = "hello"; // String
var_dump($val1);
$result = (unset) $val1;
var_dump($result); // NULL

$val2 = 10; // Integer
var_dump($val2);
$result = (unset) $val2;
var_dump($result); // NULL

$val3 = 35.46; // Float
var_dump($val3);
$result = (unset) $val3;
var_dump($result); // NULL

$val4 = true; // Boolean
var_dump($val4);
$result = (unset) $val4;
var_dump($result); // NULL

$val5 = null; // null
var_dump($val5);
$result = (unset) $val5;
var_dump($result); // NULL

//-----------------------------------------------------
