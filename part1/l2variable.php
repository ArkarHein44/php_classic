<?php

$fullname = "U Kyaw Kyaw";
$job = "Developer";

echo $fullname;
print $job;

echo "$fullname"; //U Kyaw Kyaw
print '$job'; //$job

echo "My name is $fullname";//My name is U Kyaw Kyaw
echo 'My name is $fullname';//My name is $fullname
echo "My name is ${fullname}";//My name is U Kyaw Kyaw
echo  'My name is ${fullname';//error My name is $fullname
echo 'My name is {$fullname';//error My name is $fullname

echo "He\'s my father,He is a $job"; //He\'s my father,He is a Developer
echo "He's my father,he is a \$job";//He's my father,he is a $job
echo 'He\'s my father,he is a \$job';//He's my father,he is a \$job
echo "He's my father,he is a \{$job}";//He's my father,he is a \{Developer}
echo "He's my father,he is a{\$job}";//He's my father,he is a{$job}

$gender = echo "female"; //eror
$nation = print "burma";//burma

//concat (.)
$firstname ="Aung";
$lastname = "Kyaw Kyaw";

echo $firstname;
echo $lastname;

echo $firstname.$lastname;
echo $firstname." ".$lastname;

//coments
#Single line coment

/* Multi Line coment
coment 1
coment 2
coment 3 */



?>