<?php

// => strlen(string) Function

$words = "Save Myanmar";
echo strlen($words); // 12

//---------------------------

// => str_word_count(string) function
// => str_word_count(string,return) function

//0 - Default(string)
//1 - Return an array
//2 - Return an array(with index number)

$text = "Save Myanmar Country";
echo str_word_count($text); // 3

echo str_word_count($text, 0); // 3
echo "<pre>" . print_r(str_word_count($text, 1), true) . "</pre>"; // ([0] => Save [1] => Myanmar [2] => Country)
echo "<pre>" . print_r(str_word_count($text, 2), true) . "</pre>"; // ([0] => Save [5] => Myanmar [13] => Country)

//---------------------------

// => ucwords(string) Function
// => ucwords(string,delimiters) Function
// uc means upper case

$country = "welcome to myanmar country,i live in yangon";
echo ucwords($country); // Welcome To Myanmar Country,i Live In Yangon
echo ucwords($country, ","); // Welcome to myanmar country,I live in yangon

//---------------------------

// => ucfirst(string) Function

$message = "welcome to yangon,i live in tamwe";
echo ucfirst($message); // Welcome to yangon,i live in tamwe

//---------------------------

// => lcfirst(string) Function
// lc means lower case

$msg = "Welcome to Yangon,I live in tamwe";
echo lcfirst($msg); // welcome to Yangon,I live in tamwe

//---------------------------

//=> strtoupper(string)Function
$string = "welcome to my country";
echo strtoupper($string); // WELCOME TO MY COUNTRY

//---------------------------

//=> strtolower(string)Function
$str = "WELCOME to My Country";
echo strtolower($str); // welcome to my country

//---------------------------

//=> chunk_split(string,length,delimiter) function
$letters = "Myanmar Country";
echo chunk_split($letters, 1, "."); // M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
echo chunk_split($letters, 3, "-"); // Mya-nma-r C-oun-try-

//---------------------------

// => substr(string,start index/offset,end length) Function
$country = "Welcome Myanmar";
echo substr($country, 0); //Welcome Myanmar
echo substr($country, 8); //Myanmar
echo substr($country, 0, 7); //Welcome
echo substr($country, 0, 9); //Welcome M

//---------------------------

// => strpos(string,find) function
// => strpos(string,find) function
// => strpos(string,find) function
// => strpos(string,find) function

$captions =
    "Lorem Ipsum is simply dummy text of the printing and typesetting industry Ipsum.";

echo strpos($captions, "Ipsum"); // 6 (index number)
echo strrpos($captions, "Ipsum"); // 74 (index number)
echo stripos($captions, "Printing"); // 40 (index number)
echo strripos($captions, "Ipsum"); // 74 (index number)

//---------------------------

// => str_replace(search,replace,string) function

$topic = "Save Myanmar";
echo str_replace("Myanmar", "CRPH", $topic); // Save CRPH

//---------------------------

// => substr_replace(string,replace,start index) function
// => substr_replace(string,replace,start index,end length) function

$greeting = "Welcome Myanmar";
echo substr_replace($greeting, "Hello", 0); // Hello
echo substr_replace($greeting, "Thailand", 8); // Welcome Thailand

echo substr_replace($greeting, "Hello", 0, 0); // HelloWelcome Myanmar
echo substr_replace($greeting, "Hello", 0, 3); // Hellocome Myanmar
echo substr_replace($greeting, "Hello", 0, 7); // Hello Myanmar

//---------------------------

// => trim() Function
// => trim(string,character) Function

$title = " Welcome to my Country ";
echo trim($title); //Welcome to my Country

$subtitle = " Welcome to my Country ";
echo trim($subtitle, "Wel"); //come to my Country
echo trim($subtitle, "try"); //Welcome to my Coun

//---------------------------

// => ltrim() Function
// => ltrim(string,character) Function

$sayhi = "/Mingalarbar/";
echo ltrim($sayhi, "/"); // Mingalarbar/

//---------------------------

// => rtrim() Function
// => rtrim(string,character) Function

$sayhello = "/Mingalarbar/";
echo rtrim($sayhello, "/"); // /Mingalarbar

//---------------------------

// => str_repeat() Function
// => str_repeat(string,count) Function
echo str_repeat("A Kyal Gyi ", 3); // A Kyal Gyi A Kyal Gyi A Kyal Gyi

//---------------------------

// => strcmp(string1,string2) Function
// 0  = if the two strings are equal
// <0 = if string1 is lesser than string2
// >0 = if string1 is greater than string2

echo strcmp("I Love My Job", "I Love My Job"); // 0
echo strcmp("I Love My Job", "I Love"); // 7
echo strcmp("I Love", "I Love My Job"); // -7

//---------------------------

// => explode(separator,string,limit) Function
$words = "Welcome to My Country";
echo "<pre>" . print_r(explode(" ", $words), true) . "</pre>"; // ([0] => Welcome[1] => to[2] => My[3] => Country)

echo "<pre>" . print_r(explode(" ", $words, 0), true) . "</pre>"; // ([0] => Welcome to My Country)
echo "<pre>" . print_r(explode(" ", $words, 1), true) . "</pre>"; // ([0] => Welcome to My Country)
echo "<pre>" . print_r(explode(" ", $words, 2), true) . "</pre>"; // ([0] => Welcome [1] => to My Country)
echo "<pre>" . print_r(explode(" ", $words, 3), true) . "</pre>"; // ([0] => Welcome [1] => to [2] => My Country)

//---------------------------

// => implode(separator,array) Function
$words = ["Welcome", "to", "My", "City"];
echo implode(" ", $words); // Welcome to My City
echo implode("-", $words); // Welcome-to-My-City

//---------------------------

// => join(separator,array) Function
$words = ["Welcome", "to", "My", "Village"];
echo join(" ", $words); // Welcome to My City
echo join("_", $words); // Welcome_to_My_City

//---------------------------

// => number_format(number) Function               |*** Frequently used ***|
// => number_format(number,decimals)

echo number_format("1000000"); // 1,000,000
echo number_format("1000000", 2); // 1,000,000.00

//---------------------------

// => stripslashes(string) Function
$str = 'she\'s my mother';
echo $str; // she's my mother

$str = "he\'s my father";
echo $str; // he\'s my father
echo stripslashes($str); // he's my father

//---------------------------

// => basename(path) Function                      |*** Frequently used ***|
// => basename(path,suffix) Function

$path = "./assets/img/cover/jpg";
echo $path; // ./assets/img/cover/jpg
echo basename($path); // cover.jpg
echo basename($path, ".jpg"); // cover

//---------------------------

// => pathinfo(path) Function                      |*** Frequently used ***|
// => pathinfo(path,flags) Function

// flags parameters are as follow
// PATHINFO_DIRNAME
// PATHINFO_BASENAME
// PATHINFO_EXTENSION
// PATHINFO_FILENAME

$filepath = "./assets/img/cover/jpg";

echo "<pre>" . print_r(pathinfo($filepath), true) . "</pre>"; // ([dirname] => ./assets/img/cover[basename] => jpg[filename] => jpg)
echo pathinfo($filepath)["dirname"]; // ./assets/img/cover
echo pathinfo($filepath)["filename"]; // cover

echo pathinfo($filepath, PATHINFO_DIRNAME); // ./assets/img/cover
echo pathinfo($filepath, PATHINFO_BASENAME); // cover.jpg
echo pathinfo($filepath, PATHINFO_EXTENSION); // jpg
echo pathinfo($filepath, PATHINFO_FILENAME); // cover
?>
