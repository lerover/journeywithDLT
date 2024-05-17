<?php

function mycolor($color)
{
    if ($color !== "red") {
        //        Exception(message)
        throw new Exception("I hate $color color");
    }
    return "Yeah! my fav color is $color";
}

echo mycolor("red");

//--------------------------

function mynum($base, $power)
{
    if ($power > 3) {
        throw new Exception("We do not allow power over $power");
    }

    $result = pow($base, $power);
    return $result;
}

echo mynum(2, 3);

//---------------------------------------------------

// try...catch statement

// try{
//     code to be executed
// }catch(Exception $e){
//     code to be executed is catched
// }

function mycolour($color)
{
    if ($color != "red") {
        throw new Exception("I hate $color color!");
    }

    return "Yeah, my fav color is $color";
}

// echo mycolour("black");

try {
    echo mycolour("black");
} catch (Exception $e) {
    echo "You should not try with this color";
}

try {
    echo mycolour("black");
} catch (Exception $e) {
    echo $e->getMessage(); # getMessage() is a default method derived from system.
}

try {
    echo mycolour("red");
} catch (Exception $e) {
    echo $e->getMessage();
}

//-----------------------------

function mypower($base, $power)
{
    if ($power > 3) {
        throw new Exception("We do not allow power over $power");
    }

    $result = pow($base, $power);
    return $result;
}

// echo mypower(2, 6);

try {
    echo mypower(2, 6);
} catch (Exception $e) {
    echo "You should not over." . $e->getMessage();
}

try {
    echo mypower(2, 3);
} catch (Exception $e) {
    echo "You should not over." . $e->getMessage();
}

//---------------------------------------------------

// try...catch...finally statement

// try{
//     code to be executed
// }catch(Exception $e){
//     code to be executed is catched
// }finally{
//     this code will always run regardless of whether an exception was catched or not !
// }

function mycalculate($base, $power)
{
    if ($power > 3) {
        throw new Exception("We do not allow power over $power");
    }

    $result = pow($base, $power);
    return $result;
}

// echo mycalculate(2, 4);

try {
    echo mycalculate(2, 4);
} catch (Exception $e) {
    echo "You should not over. " . $e->getMessage();
} finally {
    echo "<br/>";
    echo " Hey there!!! I am joker.";
}

try {
    echo mycalculate(2, 2);
} catch (Exception $e) {
    echo "You should not over. " . $e->getMessage();
} finally {
    echo "<br/>";
    echo " Hey there!!! I am joker.";
}
