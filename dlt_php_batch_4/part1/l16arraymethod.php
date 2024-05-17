<?php

// => array_combine(key,value);
$name = ["ag ag", "su su", "nu nu", "ko ko"];
$age = [30, 35, 40, 18];
$arrcombine = array_combine($name, $age);
echo "<pre>" . print_r($arrcombine, true) . "</pre>"; // ([ag ag] => 30 [su su] => 35 [nu nu] => 40 [ko ko] => 18)
echo $arrcombine["ko ko"]; // 18

// -------------------------------------------------------------------------------------------------------

// => count(variable/array);
$vehicles = ["Toyota", "Honda", "Ford", "Mercedes", "BMW", "Lincon"];
echo count($vehicles); // 6

// -------------------------------------------------------------------------------------------------------

// sizeof(array) Function
$colors = ["red", "green", "blue", "yellow", "pink"];
echo sizeof($colors);

// -------------------------------------------------------------------------------------------------------

// => array_count_values(variable/array); ***CASE_SENSITIVE***
$cars = ["Toyota", "Honda", "Ford", "Mercedes", "BMW", "Lincon"];
echo "<pre>" . print_r(array_count_values($cars), true) . "</pre>"; // ([Toyota] => 1 [Honda] => 1 [Ford] => 1 [Mercedes] => 1 [BMW] => 1 [Lincon] => 1)
$brands = [
    "Toyota",
    "Honda",
    "Ford",
    "Mercedes",
    "BMW",
    "Lincon",
    "toyota",
    "BMW",
    "Toyota",
];
echo "<pre>" . print_r(array_count_values($brands), true) . "</pre>"; // ([Toyota] => 2 [Honda] => 1 [Ford] => 1 [Mercedes] => 1 [BMW] => 2 [Lincon] => 1 [toyota] => 1)

// -------------------------------------------------------------------------------------------------------

// => array_chunk(variable/array,length);
// => array_chunk(variable/array,length,preservekey);
// preservekey = true/false (default value is false)
$couples = [
    "ag ag",
    "nu nu",
    "ko ko",
    "yu yu",
    "tun tun",
    "su su",
    "oo oo",
    "yin yin",
];
$result1 = array_chunk($couples, 2);
echo "<pre>" . print_r($result1, true) . "</pre>"; // ([0] => Array ([0] => ag ag [1] => nu nu) [1] => Array ([0] => ko ko [1] => yu yu) [2] => ......)
echo $result1[0][1]; // nu nu

$result2 = array_chunk($couples, 2, true);
echo "<pre>" . print_r($result2, true) . "</pre>"; // 0 1 2 3 4 5

$result3 = array_chunk($couples, 2, false);
echo "<pre>" . print_r($result3, true) . "</pre>"; // 0 1 0 1 0 1

// -------------------------------------------------------------------------------------------------------

// => array_diff(variable1/array1,variable2/array2,...);
// Note : 不需要注意 任何的 index 或者是 keyname，它只查在后面的 variable 里的 value 里面有没有 第一个的 variable 里对应的 value
$colors1 = ["red", "green", "blue", "pink"];
$colors2 = ["red", "blue", "pink", "silver"];
$colors3 = ["green", "blue", "gold", "gray"];

echo "<pre>" . print_r(array_diff($colors1, $colors2), true) . "</pre>"; // ([1] => green)
echo "<pre>" . print_r(array_diff($colors2, $colors1), true) . "</pre>"; // ([3] => silver)
echo "<pre>" .
    print_r(array_diff($colors1, $colors2, $colors3), true) .
    "</pre>"; // ()

$col1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "pink"];
$col2 = ["e" => "red", "f" => "green", "g" => "black"];

echo "<pre>" . print_r(array_diff($col1, $col2), true) . "</pre>"; // ([c] => blue [d] => pink)
echo "<pre>" . print_r(array_diff($col2, $col1), true) . "</pre>"; // ([b] => black)

// -------------------------------------------------------------------------------------------------------

// => array_diff_assoc(variable1/array1,variable2/array2,...);
// Note : 需要注意 任何的 index 和 keyname，然后这只能应用在 associated array.
$col1 = ["a" => "red", "b" => "yellow", "c" => "blue", "d" => "pink"];
$col2 = ["a" => "red", "b" => "green", "c" => "blue"];
echo "<pre>" . print_r(array_diff_assoc($col1, $col2), true) . "</pre>"; // ([b] => yellow [d] => pink)
echo "<pre>" . print_r(array_diff_assoc($col2, $col1), true) . "</pre>"; // ([b] => green)

// -------------------------------------------------------------------------------------------------------

// => array_diff_key(variable1/array1,variable2/array2,...);
// Note : 需要注意所有的 keyname, 然后这只能应用在 associated array
$col1 = [
    "a" => "red",
    "b" => "yellow",
    "c" => "blue",
    "d" => "green",
    "f" => "pink",
];
$col2 = ["a" => "red", "b" => "green", "c" => "blue", "e" => "orange"];
echo "<pre>" . print_r(array_diff_key($col1, $col2), true) . "</pre>"; // ([d] => green [f] => pink)
echo "<pre>" . print_r(array_diff_key($col2, $col1), true) . "</pre>"; // ([e] => orange)

// -------------------------------------------------------------------------------------------------------

// => array_intersect(variable1/array1,variable2/array2,...);
// Note : 不需要注意 任何的 index 或者是 keyname
$num1 = [10, 20, 30, 60, 70, 80];
$num2 = [10, 20, 30, 40, 50, 90, 80];
echo "<pre>" . print_r(array_intersect($num1, $num2), true) . "</pre>"; // ([0] => 10 [1] => 20 [2] => 30 [5] => 80)
echo "<pre>" . print_r(array_intersect($num2, $num1), true) . "</pre>"; // ([0] => 10 [1] => 20 [2] => 30 [5] => 80)

$col1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$col2 = ["a" => "red", "f" => "green", "d" => "orange"];
echo "<pre>" . print_r(array_intersect($col1, $col2), true) . "</pre>"; // ([a] => red [b] => green)
echo "<pre>" . print_r(array_intersect($col2, $col1), true) . "</pre>"; // ([a] => red [f] => green)

// -------------------------------------------------------------------------------------------------------

// => array_fill(start_index,count,value);
echo "<pre>" . print_r(array_fill(0, 5, "green")) . "</pre>"; // ([0] => green [1] => green [2] => green [3] => green [4] => green)
echo "<pre>" . print_r(array_fill(2, 5, "blue")) . "</pre>"; // ([2] => blue [3] => blue [4] => blue [5] => blue [6] => blue)

// -------------------------------------------------------------------------------------------------------

// => array_fill_keys(keys,value);
$keys = ["a", "b", "c", "d"];
$values = ["red", "green", "blue", "pink"];
echo "<pre>" . print_r(array_fill_keys($keys, "pink")) . "</pre>"; // ([a] => pink [b] => pink [c] => pink [d] => pink)
echo "<pre>" . print_r(array_fill_keys($keys, $values)) . "</pre>"; // ([a] => ([0] => red [1] => green [2] => blue [3] => pink [b] => ([0] => red [1] => green [2] => blue [3] => pink [c] => ([0] => red [1] => green [2] => blue [3] => pink [d] => ([0] => red [1] => green [2] => blue [3] => pink )

// -------------------------------------------------------------------------------------------------------

// => array_key_exists(key,variable/array); // 这只能应用在 associated array ***CASE_SENSITIVE***
$operators = ["mpt" => "ftth", "ooredoo" => "broadband"];
if (array_key_exists("mpt", $operators)) {
    echo "Key exists.";
} else {
    echo "Key doesn't exists.";
}

// -------------------------------------------------------------------------------------------------------

// => array_merge(variable1/array1,variable2/array2, ...);
$arr1 = ["red", "green"];
$arr2 = ["blue", "yellow"];
$arr3 = ["orange", "violet"];

echo "<pre>" . print_r(array_merge($arr1, $arr2), true) . "</pre>"; // ([0] => red [1] => green [2] => blue [3] => yellow)
echo "<pre>" . print_r(array_merge($arr1, $arr2, $arr3), true) . "</pre>"; // ([0] => red [1] => green [2] => blue [3] => yellow [4] => orange [5] => violet)

// -------------------------------------------------------------------------------------------------------

// => array_keys(variable/array);
// => array_keys(variable/array,value);
// => array_keys(variable/array,value,strict);
// strict ကို true ပေးလိုက်ရင် data type ပါ တူရမယ်။
$phones = [
    "mpt" => "ftth",
    "ooredoo" => "broadband",
    "atom" => "wifi",
    "mytel" => "broadband",
];

echo "<pre>" . print_r(array_keys($phones), true) . "</pre>"; // ([0] => mpt [1] => ooredoo [2] => atom [3] => mytel)
echo array_keys($phones)[1];
echo "<pre>" . print_r(array_keys($phones, "broadband"), true) . "</pre>"; // ([0] => ooredoo [1] => mpt)
echo array_keys($phones, "broadband")[1]; // mytel

$numbers = [10, 20, 30, "10"];
echo "<pre>" . print_r(array_keys($numbers, "10")), true . "</pre>"; // ([0] => 0 [1] => 3)
echo "<pre>" . print_r(array_keys($numbers, 10)), true . "</pre>"; // ([0] => 0 [1] => 3)

echo "<pre>" . print_r(array_keys($numbers, 10, false)), true . "</pre>"; // ([0] => 0 [1] => 3)
echo "<pre>" . print_r(array_keys($numbers, "10", false)), true . "</pre>"; // ([0] => 0 [1] => 3)

echo "<pre>" . print_r(array_keys($numbers, "10", true)), true . "</pre>"; // ([0] => 3)
echo "<pre>" . print_r(array_keys($numbers, 10, true)), true . "</pre>"; // ([0] => 0)

// -------------------------------------------------------------------------------------------------------

// => array_map(callback,variable1/array1,variable2/array2,...);
$males = ["ag ag", "oo oo", "ko ko", "si thu", "ng ng"];
$females = ["su su", "yu yu", "nu nu", "thida", "hla hla"];

function genderone($name)
{
    return "Mr. " . $name;
}

function gendertwo($male, $female)
{
    return $male . " & " . $female;
}

echo "<pre>" . print_r(array_map("genderone", $males)), true . "</pre>"; // ([0] => Mr. ag ag [1] => Mr. oo oo [2] => Mr. ko ko [3] => Mr. si thu [4] => Mr. ng ng)
echo "<pre>" . print_r(array_map("gendertwo", $males, $females)),
    true . "</pre>"; // ([0] => ag ag & su su [1] => oo oo & yu yu [2] => ko ko & nu nu [3] => si thu & thida [4] => ng ng & hla hla)

// -------------------------------------------------------------------------------------------------------

// => sort(variable/array);

$cars = ["volvo", "bmw", "toyota", "mazda", "suzuki"];
sort($cars);
echo "<pre>" . print_r($cars, true) . "</pre>"; // ([0] => bmw [1] => mazda [2] => suzuki [3] => toyota [4] => volvo)

$nums = [10, 50, "80", 90, 35, "100", 130, "250", 70];
sort($nums);
echo "<pre>" . print_r($nums, true) . "</pre>"; // ([0] => 10 [1] => 35 [2] => 50 [3] => 70 [4] => 80 [5] => 90 [6] => 100 [7] => 130 [8] => 250)

// -------------------------------------------------------------------------------------------------------

// => array_multisort(variable/array);

$carbrands = ["volvo", "bmw", "toyota", "mazda", "suzuki"];
echo "<pre>" . print_r(array_multisort($carbrands), true) . "</pre>"; // ([0] => bmw [1] => mazda [2] => suzuki [3] => toyota [4] => volvo)

$uckynumbers = [10, 50, "80", 90, 35, "100", 130, "250", 70];
echo "<pre>" . print_r(array_multisort($uckynumbers), true) . "</pre>"; // ([0] => 10 [1] => 35 [2] => 50 [3] => 70 [4] => 80 [5] => 90 [6] => 100 [7] => 130 [8] => 250)

// -------------------------------------------------------------------------------------------------------

// => array_reverse(variable/array);

$vehicles = ["volvo", "bmw", "toyota", "mazda", "suzuki"];
sort($vehicles);
echo "<pre>" . print_r(array_reverse($vehicles), true) . "</pre>"; // ([0] => volvo [1] => toyota [2] => suzuki [3] => mazda [4] => bmw)

$winnumbers = [10, 50, "80", 90, 35, "100", 130, "250", 70];
sort($winnumbers);
echo "<pre>" . print_r(array_reverse($winnumbers), true) . "</pre>"; // ([0] => 250 [1] => 130 [2] => 100 [3] => 90 [4] => 80 [5] => 70 [6] => 50 [7] => 35 [8] => 10)

// -------------------------------------------------------------------------------------------------------

// => array_pad(variable/array,length,value);
$colors = ["red", "green"];
echo "<pre>" . print_r(array_pad($colors, 5, "blue"), true) . "</pre>"; // ([0] => red [1] => green [2] => blue [3] => blue [4] => blue)

// -------------------------------------------------------------------------------------------------------

// => array_reduce(variable/array,callback,initital);
$nums = [10, "20", 30];
function calfun($total, $val)
{
    return $total += $val;
}

echo array_reduce($nums, "calfun", 0); // 60

// -------------------------------------------------------------------------------------------------------

// => array_sum(array) Function

$nums = [10, 20, 30, 40, 50];
echo array_sum($nums); // 150

$nums = [10, 20, 30, "40", -50];
echo array_sum($nums); // 50

$nums = ["a" => 10.2, "b" => 20.3, "c" => 30.3];
echo array_sum($nums); // 60.8

// -------------------------------------------------------------------------------------------------------

// => array_search(value,variable/array);
$myarrs = ["a", "b", "c", "d", "e"];
echo array_search("d", $myarrs); // 3

$myarrss = [
    "a" => "red",
    "b" => "blue",
    "c" => "green",
    "d" => "black",
    "e" => "white",
];
echo array_search("white", $myarrss); // e

// -------------------------------------------------------------------------------------------------------

// => array_pop(variable/array);
$colors = ["red", "green", "blue"];
array_pop($colors);
echo "<pre>" . print_r($colors, true) . "</pre>"; // ([0] => red [1] => green)

// -------------------------------------------------------------------------------------------------------

// => array_shift(variable/array);
$colors = ["red", "green", "blue"];
array_shift($colors);
echo "<pre>" . print_r($colors, true) . "</pre>"; // ([0] => green [1] => blue)

$colors = ["a" => "red", "b" => "green", "c" => "blue", "d" => "violet"];
array_shift($colors);
echo "<pre>" . print_r($colors, true) . "</pre>"; // ([b] => green [c] => red [d] => violet)

// -------------------------------------------------------------------------------------------------------

// =>unset(arrayindex) Function and array_values(array)
$colors = ["red", "green", "blue"];
// unset($color[1]);
// echo "<pre>" . print_r($colors, true) . "</pre>"; // ([0] => red [2] => blue)

unset($color[1]);
echo "<pre>" . print_r(array_values($colors), true) . "</pre>"; // ([0] => red [1] => blue)

$colors = [
    "a" => "red",
    "b" => "green",
    "c" => "blue",
    "d" => "violet",
    "e" => "pink",
];
echo "<pre>" . print_r(array_values($colors), true) . "</pre>"; // ( [0] => red [1] => green [2] => blue [3] => violet [4] => pink)

$infos = ["name" => "aung aung", "age" => 20, "city" => "Yangon"];
unset($infos["age"]);
echo "<pre>" . print_r(array_values($infos), true) . "</pre>"; // ( [0] => aung aung [1] => Yangon)

// -------------------------------------------------------------------------------------------------------

// => array_unshift(variable/array,value1,value2,...);
$colors = ["red", "green", "blue"];
array_unshift($colors, "green");
echo "<pre>" . print_r($colors, true) . "</pre>"; // ([0] => green [1] => red [2] => green [3] => blue)

$colors = ["0" => "red", "1" => "green", "2" => "blue"];
array_unshift($colors, "silver", "gold");
echo "<pre>" . print_r($colors, true) . "</pre>"; // ([0] => silver [1] => gold [2] => red [3] => green [4] => blue)

$colors = ["a" => "red", "b" => "green", "c" => "blue"];
array_unshift($colors, "silver", "gold");
echo "<pre>" . print_r($colors, true) . "</pre>"; // ([0] => silver [1] => gold [a] => red [b] => green [c] => blue)

// -------------------------------------------------------------------------------------------------------

// => array_push(variable/array,value1,value2,...);
$colors = ["red", "green", "blue"];
array_push($colors, "green");
echo "<pre>" . print_r($colors, true) . "</pre>"; // ([0] => red [1] => green [2] => blue [3] => green)

$colors = ["0" => "red", "1" => "green", "2" => "blue"];
array_push($colors, "silver", "gold");
echo "<pre>" . print_r($colors, true) . "</pre>"; // ([0] => red [1] => green [2] => blue [3] => silver [4] => gold)

$colors = ["a" => "red", "b" => "green", "c" => "blue"];
array_push($colors, "silver", "gold");
echo "<pre>" . print_r($colors, true) . "</pre>"; // ([a] => red [b] => green [c] => blue [0] => silver [1] => gold)

// -------------------------------------------------------------------------------------------------------

// array_slice(array,index) Function
// array_slice(array,index,length)
// array_slice(array,index,length,preserve)

$candycolors = ["red", "green", "blue", "yellow", "pink"];

echo "<pre>" . print_r(array_slice($candycolors, 0), true) . "</pre>"; // [red to pink]
echo "<pre>" . print_r(array_slice($candycolors, 2), true) . "</pre>"; // [blue to pink]

echo "<pre>" . print_r(array_slice($candycolors, 0, 2), true) . "</pre>"; // ( [0] => red [1] => green)
echo "<pre>" . print_r(array_slice($candycolors, 2, 2), true) . "</pre>"; // ( [0] => blue [1] => yellow)
echo "<pre>" . print_r(array_slice($candycolors, 2, 5), true) . "</pre>"; // ( [0] => blue [1] => yellow [2] => pink)

echo "<pre>" . print_r(array_slice($candycolors, 2, 5, false), true) . "</pre>"; // ( [0] => blue [1] => yellow [2] => pink)
echo "<pre>" . print_r(array_slice($candycolors, 2, 5, true), true) . "</pre>"; // ( [2] => blue [3] => yellow [4] => pink)

// -------------------------------------------------------------------------------------------------------

// array_splice(array,index) Function
// array_splice(array,index,length)
// array_splice(array,index,length,array)

$shirtcolors = ["red", "green", "blue", "yellow", "pink"];

echo "<pre>" . print_r(array_splice($shirtcolors, 0), true) . "</pre>"; // [red to pink]
echo "<pre>" . print_r(array_splice($shirtcolors, 2), true) . "</pre>"; // [blue to pink]

echo "<pre>" . print_r(array_splice($shirtcolors, 0, 2), true) . "</pre>"; // ( [0] => red [1] => green)
echo "<pre>" . print_r(array_splice($shirtcolors, 2, 2), true) . "</pre>"; // ( [0] => blue [1] => yellow)
echo "<pre>" . print_r(array_splice($shirtcolors, 2, 5), true) . "</pre>"; // ( [0] => blue [1] => yellow [2] => pink)

$males = ["aung aung", "maung maung", "kyaw kyaw", "zaw zaw", "naung naung"];
$females = ["su su", "yu yu", "nu nu"];

//array_splice($males, 0, 2, $females);
//echo "<pre>" . print_r($males, true) . "</pre>"; // ( [0] => su su [1] => yu yu [2] => nu nu [3] => kyaw kyaw [4] => zaw zaw [5] => naung naung)

//array_splice($males, 0, 3, $females);
//echo "<pre>" . print_r($males, true) . "</pre>"; // ( [0] => su su [1] => yu yu [2] => nu nu [3] => zaw zaw [4] => naung naung)

array_splice($males, 1, 3, $females);
echo "<pre>" . print_r($males, true) . "</pre>"; // ( [0] => aung aung [1] => su su [2] => yu yu [3] => nu nu [4] => naung naung)

// -------------------------------------------------------------------------------------------------------

// array_unique(array) Function

$num = [10, 20, 30, 50, 10, 30, 60, 70, 80, 10];
echo "<pre>" . print_r(array_unique($num), true) . "</pre>"; // ( [0] => 10 [1] => 20 [2] => 30 [3] => 50 [6] => 60 [7] => 70 [8] => 80)

$colors = [
    "a" => "red",
    "b" => "green",
    "c" => "blue",
    "d" => "red",
    "e" => "blue",
];
echo "<pre>" . print_r(array_unique($colors), true) . "</pre>"; // ( [a] => red [b] => green [c] => blue)

// -------------------------------------------------------------------------------------------------------

// array_walk(array,callback function) Function
// array_walk(array,callback function,parameter)

$colors = [
    "a" => "red",
    "b" => "green",
    "c" => "blue",
    "d" => "pink",
    "e" => "violet",
];

function myfunone($val, $key)
{
    echo "key is = $key and value is $val."; // key is = a and value is red.key is = b and value is green.key is = c and value is blue.key is = d and value is pink.key is = e and value is violet.
}

array_walk($colors, "myfunone");

function myfuntwo($val, $key, $p)
{
    echo "key is = $key and value is $val $p.";
}

array_walk($colors, "myfuntwo", "colour"); // key is = a and value is red colour.key is = b and value is green colour.key is = c and value is blue colour.key is = d and value is pink colour.key is = e and value is violet colour.

function myfunthree(&$val)
{
    return $val = "orange";
}

array_walk($colors, "myfunthree");
echo "<pre>" . print_r($colors, true) . "</pre>"; // ( [a] => orange [b] => orange [c] => orange [d] => orange [e] => orange)

// -------------------------------------------------------------------------------------------------------

// => compact(var1,var2,var3,....) Function

$name = "Aung Aung";
$age = "25";
$city = "Yangon";

$result = compact("name", "age", "city");
echo "<pre>" . print_r($result, true) . "</pre>"; // ( [name] => Aung Aung [age] => 25 [city] => Yangon)

// -------------------------------------------------------------------------------------------------------

// => range(start,end) Function
// => range(start,end,step)

$num1 = range(0, 5);
echo "<pre>" . print_r($num1, true) . "</pre>"; // ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5)

$num2 = range(0, 50, 10);
echo "<pre>" . print_r($num2, true) . "</pre>"; // ( [0] => 0 [1] => 10 [2] => 20 [3] => 30 [4] => 40 [5] => 50)

$char1 = range("a", "k");
echo "<pre>" . print_r($char1, true) . "</pre>"; // ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => f [6] => g [7] => h [8] => i [9] => j [10] => k)

$char2 = range("k", "g");
echo "<pre>" . print_r($char2, true) . "</pre>"; // ( [0] => k [1] => j [2] => i [3] => h [4] => g)

// -------------------------------------------------------------------------------------------------------

// => current(), pos(), next(), end(), prev(), reset() Function
$students = ["aung aung", "maung maung", "zaw zaw", "tun tun", "kyaw kyaw"];
// echo current($students); // aung aung
// echo pos($students); // aung aung

// echo end($students); // kyaw kyaw
// echo current($students); // kyaw kyaw

// echo current($students); // aung aung
// echo next($students); // maung maung
// echo current($students); // maung maung
// echo next($students); // zaw zaw
// echo prev($students); // maung maung

echo end($students); // kyaw kyaw
echo current($students); // kyaw kyaw
echo prev($students); // tun tun

echo reset($students);
echo current($students); // aung aung

// -------------------------------------------------------------------------------------------------------

// => serialize(), unserialize() Functions

$staffs = [
    ["aung aung", "maung maung", "kyaw kyaw", "tun tun", "zaw zaw"],
    ["su su", "yu yu", "nu nu", "aye aye", "hla hla"],
];

echo "<pre>" . print_r($staffs, true) . "</pre>"; // ( [0] => Array([0] => aung aung [1] => maung maung [2] => kyaw kyaw [3] => tun tun [4] => zaw zaw ) [1] => Array( [0] => su su [1] => yu yu [2] => nu nu [3] => aye aye [4] => hla hla ))

$seriadatas = serialize($staffs);
echo $seriadatas; // a:2:{i:0;a:5:{i:0;s:9:"aung aung";i:1;s:11:"maung maung";i:2;s:9:"kyaw kyaw";i:3;s:7:"tun tun";i:4;s:7:"zaw zaw";}i:1;a:5:{i:0;s:5:"su su";i:1;s:5:"yu yu";i:2;s:5:"nu nu";i:3;s:7:"aye aye";i:4;s:7:"hla hla";}}
var_dump($seriadatas); // string(209) "a:2:{i:0;a:5:{i:0;s:9:"aung aung";i:1;s:11:"maung maung";i:2;s:9:"kyaw kyaw";i:3;s:7:"tun tun";i:4;s:7:"zaw zaw";}i:1;a:5:{i:0;s:5:"su su";i:1;s:5:"yu yu";i:2;s:5:"nu nu";i:3;s:7:"aye aye";i:4;s:7:"hla hla";}}"

$unseriadatas = unserialize($seriadatas);
echo "<pre>" . print_r($unseriadatas, true) . "</pre>"; // ( [0] => Array([0] => aung aung [1] => maung maung [2] => kyaw kyaw [3] => tun tun [4] => zaw zaw ) [1] => Array( [0] => su su [1] => yu yu [2] => nu nu [3] => aye aye [4] => hla hla ))

// -------------------------------------------------------------------------------------------------------
