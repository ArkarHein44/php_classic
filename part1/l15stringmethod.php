<?php
// =>strlen(string) Function

$words = "Save Myanmar";
echo strlen($words); //12

//=> str_word_count(string) Function
//=> str_word_count(string,count) Function

//0 - Default(string)
//1 - Return an array
//2 - Return an array

$text = "Save Myanmar Country";
echo str_word_count($text);//3

echo str_word_count($text,0);//3
echo "<pre>".pirnt_r(str_word_count($text,1),true) ."</pre>"; //Array
// (    [0] => Save
//     [1] => Myanmar
//     [2] => Country
// )
echo "<pre>".pirnt_r(str_word_count($text,2),true) ."</pre>";//Array
// (
//     [0] => Save
//     [5] => Myanmar
//     [13] => Country
// )

//=> ucwords(string) Function (uc = upper case)
//=> ucwords(string,delimiters) Function

$country = "welcome to myanmar country, i live in yangon";
echo ucwords($country);//Welcome To Myanmar Country,i Live In Yangon
echo ucwords($country,",");//Welcome to myanmar country,I live in yangon

//=> ucfirst(string) Function

$message = "welcome to yangon,i live in tamwe";
echo ucfirst($message);//Welcome to yangon,i live in tamwe

//=>lcfirst(string) Function
$msg= "Welcome to Yangon,I live in tamwe";
echo lcfirst($msg);//welcome to Yangon,I live in tamwe

// =>strtoupper(string) Function
$string = "welcome to my country";
echo strtoupper($string);//WELCOME TO MY COUNTRY 

// =>strtolower(string) Function
$str = "WELCOME to My Country";
echo strtolower($str);//welcome to my country

//=> chunk_split(string,length,delimiter) Function
$letters = "Myanmar Country";
echo chunk_split($letters,1,".");//M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
echo chunk_split($letters,3,"-"); //Mya-nma-r C-oun-try-

//=> substr(string,start index/offset,end length) Function
$country = "Welcome Myanmar";
echo substr($country,0); //Welcome Myanmar
echo substr($country,8); //Myanmar
echo substr($country,0,7);//Welcome
echo substr($country,0,9); //Welcome M


//=>strpos(string,find) Function
//=>strrpos(string,find) Function
//=>stripos(string,find) Function
//=>strripos(string,find) Function

$caption ="Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
echo strpos($caption,"Ipsum");// 6 (index number)
echo strrpos($caption,"Ipsum");// 74 (index number)
echo stripos($caption,"Printing");// 40 (index number)
echo strripos($caption,"Ipsum");// 74 (index number)

//=> str_replace(search,replace,string) Function

$topic = "Save Myanmar";
echo str_replace("Myanmar","CRPH", $topic);//save CRPH

//=>substr_replace(string,replace,start index) Function
//=>substr_replace(string,replace,start index,end length) Function

$greeting = "Welcome Myanmar";
echo str_replace($greeting,"Hello",0);//Hello
echo str_replace($greeting,"Thailand",8);//Hello Thailand

echo str_replace($greeting,"Hello",0,0);//HelloWelcome Myanmar
echo str_replace($greeting,"Hello",0,3);//Hellocome Myanmar
echo str_replace($greeting,"Hello",0,7);//Hello Myanmar

//=> trim() Function
//=> trim(string,characters) Function

$title = " Welcome to My Country ";
echo trim($title); //Welcome to My Country

$subtitle = "Welcome to My Country";
echo trim($subtitle,"Wel"); //come to My Country
echo trim($subtitle,"try"); //Welcome to My Coun

 
?>