<?php

//=> if statement

$x = 10;
$y = 20;

// => if
if ($x > $y) {
    echo "Your condition is yes";
}

if ($x < $y) {
    echo "Your condition is yes";
}


// => if else
if ($x > $y) {
    echo "Yes, x grater than y";
} else {
    echo "No, x less than y";
}

// => Short Hand

if ($x < $y) echo "Yes, x less than y";
else echo "No, x greater than y";


$color = "gray";
$colorvalue = $color; //Assign by refrence

echo $color;
echo $colorvalue;

if ($colorvalue === "red") {
    echo "My fav color is red";
} else {
    echo "I hate red color";
}

if ($colorvalue === "red") {
    echo "My fav color is $color";
} else {
    echo "I hate red color";
}

// => Logical Operator
// &&(And) ||(or) !(Not)

$a = 100;
$b = 200;
$c = 300;

if ($a < $b && $b > $c) {
    echo "it is true";
} else {
    echo "it is false";
}

if ($a < $b && $b < $c) {
    echo "it is true";
} else {
    echo "it is false";
}

if ($a < $b || $b > $c) {
    echo "it is true";
} else {
    echo "it is false";
}

if ($a < $b || $b > $c && $a > $c) {
    echo "it is true";
} else {
    echo "it is false";
}

if (($a < $b || $b > $c) && $a > $c) {
    echo "it is true";
} else {
    echo "it is false";
}

if (!($a < $b)) {
    echo "it is true";
} else {
    echo "it is false";
}

if ($b > $c) {
    echo "it is true";
} elseif ($b === 200) {
    echo "it is equal";
} else {
    echo "it is false";
}

//shot hand

//Method-1
if ($b > $c) echo "it is true";
elseif ($b === 200) echo "it is equal";
else echo "it is false";

//Method-2
if ($b > $c)
    echo "it is true";
elseif ($b === 200)
    echo "it is equal";
else
    echo "it is false";

// switch(condition){
//     case statement1:
//         echo "output";
//         break;
//     case statement2:
//         echo "output";
//         break;
//     case statement3:
//         echo "output";
//         break;
//     default:
//         echo "output";
// }




$phone = "iphone";

switch ($phone) {
    case "sony":
        echo "i can't buy sony phone";
        break;
    case "iphone":
        echo "i hate apple products";
        break;
    case "mi":
        echo "oki, i can buy";
        break;
    case "samsung":
        echo "my fav mobile product is samsung";
        break;
    default:
        echo "i love keypad";
}
?>