<?php

$string = "We are family";
echo $string;

//preg_match(pattern,string);
// ဘယ်စာလုံးပါရမယ်ဆိုပြီးစစ်ထုတ်သည့် function 

// pattern = စစ်ထုတ်မယ့် string ကို /xx/ delimeter ထဲထည့်ရေး
// string = ကိုယ်စစ်မယ့် target 

// "/xx/" delimeter မပါရင် အလုပ်မလုပ်ပါ

// $result = preg_match("We are family",$string);//error

$result = preg_match("/We are family/",$string);// 1 true
$result = preg_match("/family/",$string);// 1 true
$result = preg_match("/Family/",$string);// 0 false
$result = preg_match("/mily/",$string);// 1 true

// pattern နောက်မှာ $ထည့်လိုက်ရင် စာကြောင်းအဆုံးကိုသာစစ်ထုတ်မှာဖြစ်ပါသည်။
$result = preg_match("/mily$/",$string);// 1 true
$result = preg_match("/family$/",$string);// 1 true
$result = preg_match("/Family$/",$string);// 0 false
$result = preg_match("/are$/",$string);// 0 false
$result = preg_match("/we$/",$string);// 0 false


$result = preg_match("/^mily/",$string);// 0 false
$result = preg_match("%^are%",$string);// 0 false
$result = preg_match("#^we#",$string);// 0 false
$result = preg_match("/^We/",$string);// 1 true

$result = preg_match("/^family$/",$string);// 0 false
$result = preg_match("/^$/",$string);// 1 true (empty ဖြစ်ရမည်)

$result = preg_match("/^we/",$string);// 0 false
$result = preg_match("/^we/i",$string);// 1 true
$result = preg_match("/^We/i",$string);// 1 true

$result = preg_match("/[b-d]/",$string);// 0 false
$result = preg_match("/[a-f]/",$string);// 1 true
$result = preg_match("/[a-z]/",$string);// 1 true
$result = preg_match("/[A-Z]/",$string);// 1 true
$result = preg_match("/[0-4]/",$string);// 0 false


$string = "my lucky number is 567";

$result = preg_match("/[0-4]/",$string);// 0 false
$result = preg_match("/[5-9]/",$string);// 1 true
$result = preg_match("/[a-z]/",$string);// 1 true
$result = preg_match("/[A-Z]/",$string);// 0 false
$result = preg_match("/[A-Z]|[a-z]/",$string);// 1 true
$result = preg_match("/[A-Z,a-z]/",$string);// 1 true
$result = preg_match("/^[a-z]/",$string);// 1 true
$result = preg_match("/[a-z]$/",$string);// 0 false
$result = preg_match("/^[5-9]/",$string);// 0 false
$result = preg_match("/[5-9]$/",$string);// 1 true


$result = preg_match("/[^a-z]/",$string);// 1 true Note :: it's mean that not include a to z!, result is true cuz $string incluede spacing and digit
$result = preg_match("/[^5-9]/",$string);// 1 true 5 ကနေ 9 ထိ မဟုတ်တဲ့ ဟာတေပါသလား  Note :: it's mean that not include 5 to 9!, result is true cuz $string incluede spacing and digit
$result = preg_match("/[^0-4]/",$string); // :: it's mean that not include 0 to 4 !, result is true cuz $string incluede spacing and digit


$string = "admin@gmail.com";

$result = preg_match("/@/",$string); // 1 true
$result = preg_match("/m/",$string); // 1 true
$result = preg_match("/m+/",$string); // 1 true
$result = preg_match("/b+/",$string); // 0 false
$result = preg_match("/b+/",$string); // 0 false
$result = preg_match("/b+/",$string); // 0 false
$result = preg_match("/b*/",$string); // 1 true
$result = preg_match("/b?/",$string); // 1 true

$string = "admin@gmail.com";
$result = preg_match("/n{1}/",$string);//true
$result = preg_match("/n{2}/",$string);//true
$result = preg_match("/n{3}/",$string);//false
$result = preg_match("/n{2,3}/",$string);//true
$result = preg_match("/n{2,}/",$string);//true
$result = preg_match("/\s/",$string);//false

$string = "V8 Engine";
$result = preg_match("/\s/",$string); //true
$result = preg_match("/\d/",$string); //true
$result = preg_match("/\D/",$string); //true
$result = preg_match("/\w/",$string); //true
$result = preg_match("/\W/",$string); //true


$string = "528";
$result = preg_match("/\d/",$string); //true
$result = preg_match("/\D/",$string); //false
$result = preg_match("/\w/",$string); //true
$result = preg_match("/\W/",$string); //false

$string = "admin@gmail.com";
$result = preg_match("/a\wm/",$string);//true
$result = preg_match("/a\w{1}m/",$string);//true
$result = preg_match("/a\w{2}m/",$string);//false ,cuz any exact 2 words, adbmin@gmail.com
$result = preg_match("/a\w{2,4}m/",$string);//false ,cuz any exact 2 to 4 words, adbcdmin@gmail.com
$result = preg_match("/a\w{2,}m/",$string);//false  ,cuz any exact 2 to more words, adbcd....min@gmail.com

$result = preg_match("/a.m/",$string);//true
$result = preg_match("/a..m/",$string);//false  abdmin@gmail.com
$result = preg_match("/a.{1}m/",$string);//true
$result = preg_match("/a.{2}m/",$string);//false ,cuz any exact 2 words, adbmin@gmail.com
$result = preg_match("/a.{2,4}m/",$string);//false ,cuz any exact 2 to 4 words, adbcdmin@gmail.com
$result = preg_match("/a.{2,}m/",$string);//false  ,cuz any exact 2 to more words, adbcd....min@gmail.com

$string = "PHP";
$result = preg_match("/.{2}/",$string);//true

$string = "php";
$result = preg_match("/hp/",$string);//true
$result = preg_match("/p(hp)*/",$string);//true
$result = preg_match("/p(hp)+/",$string);//true

$string = "Vv";
$result = preg_match("/.{2}/",$string);//true
$result = preg_match("/^.{2}$/",$string);//true ,exact any 2 characters

$string = "Welcome to our <i>programming class</i>";
$result = preg_match("/<i><\/i>/",$string);//false 
$result = preg_match("/<i>\w<\/i>/",$string);//false ,cuz oone char
$result = preg_match("/<i>\w*<\/i>/",$string);//false ,cuz contain space
$result = preg_match("/<i>.<\/i>/",$string);//false 
$result = preg_match("/<i>.*<\/i>/",$string);//true
$result = preg_match("/<i>(.*)<\/i>/",$string);//true

$string = "admin@gmail.com";
$result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string);// 1 true



//preg_replace(pattern,replacement,string);

$string = "i love PHP";
$result = preg_replace('/php/','javascript',$string);//i love PHP
$result = preg_replace('/php/i','javascript',$string);//i love javascript

$string = "Are you ready to learn PHP framework";
$result = preg_replace('/php/','javascript',$string);
$result = preg_replace('/php/i','javascript',$string);
$result = preg_replace('/\s/','javascript',$string);


//Bracket Expressions
$string = "adming123@gmail .com";

$result = preg_replace("/[[:space:]]","",$string);// admin123@gmail.com
$result = preg_replace("/[[:space:]]","x",$string);// admin123@gmailx.com
$result = preg_replace("/[[:alpha:]]","",$string);// xxxxx123@xxxxx .xxx
$result = preg_replace("/[[:digit:]]","",$string);// adminxxx@gmail .com
$result = preg_replace("/[[:alnum:]]","",$string);// xxxxxxxx@xxxxx .xxx
$result = preg_replace("/[[:punct:]]","",$string);// admin123@gmail .xom


$string = "Adming123@gmail .Com";

$result = preg_replace("/[[:lower:]]","",$string);// Axxxx123@xxxxx .Cxx
$result = preg_replace("/[[:upper:]]","x",$string);// xdmin123@gmail .xom

$string = "Are you ready to learn PHP Framework";
$result = preg_replace(['/PHP/','/framework/'],['javascript','libraries'],$string);//Are you ready to learn javascript Framework
$result = preg_replace(['/PHP/','/framework/i'],['javascript','libraries'],$string);//Are you ready to learn javascript framework

$string =  "My lucky number is 007 but i got ticket number 5700";
$result = preg_replace("/[0-9]","x",$string);//My lucky number is xxx but i got ticket number xxxx
$result = preg_replace("/[0-9]+","x",$string);//My lucky number is x but i got ticket number x


echo $result;

//no limit = 0 or NULL
//preg_split(pattern,string,limit,flags);

$string = "My lucky number is 007";
$result = preg_split("/\s/",$string);
//echo $result;//errpr, Array to string conversion
echo "<pre>".print_r($result,true)."</pre>";
echo  $result[0]; //My
echo  $result[4]; //007


$result = preg_split("/\s/",$string,2);
echo "<pre>".print_r($result,true)."</pre>";
echo $result[0];//My
echo $result[1];//lucky number is 007


$string =  "My lucky number is 007 but i got ticket number 5700";
$result = preg_split("/\s/",$string);
$result = preg_split("/[\s]/",$string);
$result = preg_split("/\s,/",$string);//0 => My lucky number is 007 but i got ticket number 5700
$result = preg_split("/[\s,]/",$string);
$result = preg_split("/[\s,]/",$string,NULL,PREG_SPLIT_NO_EMPTY);
$result = preg_split("/[\s,]/",$string,0,PREG_SPLIT_NO_EMPTY);
$result = preg_split("//",$string);
$result = preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY);
$result = preg_split("//",$string,0,PREG_SPLIT_NO_EMPTY);


echo "<pre>".print_r($result,true)."</pre>";

//preg_quote(string,delimeter);
$string = "He\'s my father,do you know him?";
$result = preg_quote($string);
$result = preg_quote($string,"o");

//preg_match_all(pattern,string,match/return,flags);

$string = "Winning numbers are 227-000 & 002-777, but my lucky numbers are 007-222 & 112233 ";
preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
preg_match_all("/\d+-\d+/",$string,$result,PREG_PATTERN_ORDER);
//echo $result; //error ,Array to string conversion
echo "<pre>".print_r($result,true)."</pre>";


//Lookahead & Lookbehind
//(?=)positive lookahead (or) regax lookahead = right hand side
//(?<=)positive lookbehind (or) regax lookbehind = left hand side

//(?!) negative lookahead (or) regax lookahead
//(?<!) negative lookbehind (or) regax lookbehind

$string = "aungkyaw@cisco.com";
$result = preg_match('/@(?=cisco)/',$string); //true(positive lookahead)
$result = preg_match('/(?<=@)cisco/',$string);//true (positive lookbehind )

$result = preg_match('/@(?!cisco)/',$string); //false(negative lookahead)
$result = preg_match('/(?<!@)cisco/',$string);//false (negative lookbehind )



echo $result;





?>

<!-- 
$ must be in end (case sensitive) 
^ must be start (case sensitive), caret or circumflex (shift+6) 
i no case sensitive
[] range a-z A-Z 0-9
m+ must contain at least one m letter and more
m* can contain m or not and more
m? can contain m or not and more
m{nth} contain place m as per nth and more
m{nth,nth} contain some place m as per nth and more
m{nth,} contain some place m as per nth and more

\s space
\d digit
\D any no digit
\w any word [a-z] [A-Z] [0-9]
\W any @#$*
. any character
() this
+must
*can

p(hp)* can be contain hp
p(hp)+ must be contain hp

[[:space:]] space characters
[[:alpha:]] alphabetic characters
[[:digit:]] digit characters
[[:alnum:]] alphanumeric characters
[[:lower:]] lower-case characters
[[:upper:]] upper-case characters

-->


Local Computer
apache install
php install
mysql install

web server

Os
1 Windows
    Xampp   apache/php/mysql/filezila/mailserver
    Wamp    apache/php/mysql/filezila/mailserver

2 Linux

IIS (internet information service in windows)
