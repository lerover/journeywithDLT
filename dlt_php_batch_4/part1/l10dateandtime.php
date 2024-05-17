<?php

//1 Jan 1970

date_default_timezone_set("Asia/Yangon");

$getdate = getdate();
// echo $getdate;
var_dump($getdate);
echo "<pre>" . print_r($getdate, true) . "</pre>";

echo "This is second = " . $getdate["seconds"];
echo "This is minute = " . $getdate["minutes"];
echo "This is hour = " . $getdate["hours"];

echo "This is weekday = " . $getdate["weekday"]; //Tuesday
echo "This is wday = " . $getdate["wday"]; //0sun 1mon
echo "This is yday = " . $getdate["yday"]; //64 day of the year

echo "This is month = " . $getdate["month"]; //March
echo "This is mon = " . $getdate["mon"]; //3 //day of month
echo "This is mday = " . $getdate["mday"]; //5

echo "This is year = " . $getdate["year"]; //2024

echo "This is 0 = " . $getdate["0"]; //1709654321

$time = time();
echo "this is 0 =" . $time;

//1709654321

//DATE/TIME Format
//date(formet,timestampe);

$date = date("a", $time);
echo "This is format a = " . $date; //am pm

$date = date("A", $time);
echo "This is format A = " . $date;

//AM PM

$date = date("d", $time);
echo "This is format d = " . $date; //05 // day Leading zero

$date = date("D", $time);
echo "This is format D = " . $date;

// Tue Sun Mon

$date = date("F", $time);
echo "This is format F = " . $date; // March

$date = date("g", $time);
echo "This is format g = " . $date;

//10 //hours // no leading zero

$date = date("G", $time);
echo "This is format G = " . $date; //22 hours // no leading zero

$date = date("h", $time);
echo "This is format h = " . $date;

//10 //hours //  leading zero //24hrs format

$date = date("H", $time);
echo "This is format H = " . $date;

//22 hours // leading zero //24hrs format
$date = date("i", $time);
echo "This is format i = " . $date;

//05 //mintue //  leading zero

$date = date("j", $time);
echo "This is format j = " . $date;

//5 //mintue //  no leading zero

$date = date("l", $time);
echo "This is format l = " . $date; //Tuesday

$date = date("L", $time);
echo "This is format L = " . $date;

//1 //Leap Year(1 = true,0 + false)

$date = date("m", $time);
echo "This is format m = " . $date; //03 //day of month leading 0

$date = date("M", $time);
echo "This is format M = " . $date;

//Mar (Jan/Feb)

$date = date("n", $time);
echo "This is format n = " . $date; //3 //day of month no leading 0

$date = date("r", $time);
echo "This is format r = " . $date;

//Tue, 05 Mar 2024 23:10:53 +0630

$date = date("s", $time);
echo "This is format s = " . $date; // 57 seconds

$date = date("U", $time);
echo "This is format U = " . $date;

// 1709657004

$date = date("y", $time);
echo "This is format y = " . $date; //24 short code

$date = date("Y", $time);
echo "This is format Y = " . $date;

//2024

$date = date("z", $time);
echo "This is format z = " . $date;

//64 day of year
?>

//https://www.php.net/manual/en/timezones.asia.php
