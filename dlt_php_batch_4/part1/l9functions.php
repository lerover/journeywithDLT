<?php

//USer Defined Function

// function name(){
//     code to be executed;
// }

// --------------------------

// Parameter Function (or) Arguments Function
// (i)Single
// (ii)Multi

// function name($arg1){
//     code to be executed;
// }

// function name($arg1,$arg2){
//     code to be executed;
// }

// --------------------------

// Default Parameter Function (or) Default Arguments Function

// function name($name="aung aung",$age=20){
//     code to be executed;
// }

// --------------------------

function myfun()
{
    echo "my name is mr.tin";
}

myfun();
myfun();

function myfun1()
{
    $num1 = 10;
    $num2 = 20;
    $cal = $num1 + $num2;
    echo $cal;
}

myfun1(); //30

//--------------------------

function singlefun($name)
{
    echo "My name is $name";
}

singlefun("aung aung");
singlefun("su su");

//--------------------------

function multifun($name, $age)
{
    echo "My name is $name and I am {$age} years old.";
}

multifun("kyaw kyaw", 20);
multifun("nandar", 30);

//--------------------------

function defaultfun($name = "hla hla")
{
    echo "My name is ${name}.";
}

defaultfun(); //My name is hla hla.
defaultfun("aye aye"); //My name is aye aye.

//----------------------------

function defaultfun1($num1 = 10, $num2 = 20, $num3 = 30)
{
    $cal = $num1 + $num2 + $num3;
    echo $cal;
}

defaultfun1(); //60
defaultfun1(50, 10); //90
defaultfun1(70, 5, 15); //90

//----------------------------

//Return

function myreturn($num1)
{
    $cal = $num1 + 10;
    return $cal;
}

echo myreturn(50); //60

function returnfun1($num1)
{
    return $cal = $num1 + 10;
}
echo returnfun1(100); //110

function returnfun2($num1, $num2, $num3)
{
    $cal = $num1 + $num2 + $num3;
    return $cal;
}

echo returnfun2(10, 20, 30); //60

function returnfun3($num1 = 10, $num2 = 20, $num3 = 30)
{
    $cal = $num1 + $num2 + $num3;
    return $cal;
}
echo returnfun3(50); //100
echo returnfun3(); //60

//Dynamic Function Call

$dyn1 = myreturn(100);
echo $dyn1; //110

$dyn2 = returnfun3();
echo $dyn2; //60

$dyn3 = "returnfun1"; //Dynamic Function Call
echo $dyn3; //returnfun1
echo $dyn3(100); //110

$myfun = "returnfun3";
echo $myfun;

if (function_exists($myfun)) {
    echo "Yes,your function value is already in some kind of function.";
} else {
    echo "No";
}

?>
