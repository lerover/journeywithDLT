<?php

$fullname = "U Kyaw Kyaw";
$job = 'Developer';

echo $fullname;
print $job;

echo "$fullname";
echo '$job';

echo "My name is $fullname";//My name is U Kyaw Kyaw
echo "My name is ${fullname}";//My name is U Kyaw Kyaw
echo "My name is {$fullname}";//My name is U Kyaw Kyaw
echo 'My name is $fullname';//My name is $fullname
echo 'My name is ${fullname}';//My name is ${fullname}
echo 'My name is {$fullname}';//My name is {$fullname}

// echo `My name is ${fullname}`;// error
// echo `My name is {$fullname}`;// error

echo "He's my father, his job is a $job";//He's my father, his job a is Developer
echo "He's my father, his job is a \$job";//He's my father, his job is a $job
echo 'He\'s my father, his job is a $job';//He's my father, his job is a $job
echo "He's my father, his job is a \${job}";//He's my father, his job is a ${job}
echo "He's my father, his job is a \{$job}";//He's my father, his job is a \{Developer}
echo "He's my father, his job is a {\$job}";//He's my father, his job is a {$job}

// $gender = echo "female";//error
$nation = print "burma";//burma


//Concat(.)

$firstname = "Aung";
$lastname = "Kyaw Kyaw";

echo $firstname;//Aung
echo $lastname;//Kyaw Kyaw
echo $firstname.$lastname;//AungKyaw Kyaw
echo $firstname.''.$lastname;// Aung Kyaw Kyaw

//Comments
# Single Line Comment

/*Multi Line Comment
Comment1
Comment2
Comment3 */

?>