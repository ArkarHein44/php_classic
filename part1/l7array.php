<?php

//=> Arrays
// (i) Indexed Array (Manual Array)
// (ii) Associative Array
// (iii) Multidimensional Array


//Indexed Array
$names = array("aung aung ","maung maung","zaw zaw","kyaw kyaw","tun tun" );
//echo $name;//error
//print $name;//error

echo count($name);//5
var_dump($name);
print_r($name,false);

$colors = ["red","green","blue","black","white"];
//echo $colors;//error

echo count($colors);

echo count($colors);//5
print_r($colors,false);
echo "<pre>".$print_r($colors,"true")."</pre>";

$colors[6] = "gray";
$colors[7] = "stone";
$colors[8] = "skyblue";
$colors[0] = "violet";

echo "<pre>".print_r($color,true)."</pre>";
echo count($colors); //9

//--------------------------------------------------------

//(ii)Associative Array

$news = array("pone" =>"this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
echo count($news);
var_dump($news);
    
$medias = [
    "pone" =>"this is post one",
    "ptwo"=>"this is post two",
    "pthree"=>"this is post three"
];


$medias["pfour"] = "this is post four";
$medias["pthree"] = "this is new post three";

echo count($medias);
var_dump($medias);

echo "i like this post. so post title is ".$medias["pthree"];

//=>(iii) Multidimensional Array (Array contains one or more)

$paints = array(
    array("red","green","blue"),
    array("pen","pencil","ruler"),
    array("paper","plastic");

)
echo count($paints);
var_dump($paints);

$maincolors = [
    ["red","green","blue"],
    ["pen","pencil","ruler"],
    ["paper","plastic" ]
]

echo count($maincolors);
var_dump($maincolors);

echo $maincolors[0][0];//red
echo $maincolors[1][2];//ruler
echo $maincolors[2][1];//plastic

$persons = array(
    array("name"=>"aung aumg","age"=>20),
    array("name"=>"su su","age"=>18),
    array("name"=>"nu nu","age"=>23),
);

$vippersons = [
    ["name"=>"aung aumg","age"=>20],
    ["name"=>"su su","age"=>18],
    ["name"=>"nu nu","age"=>23],
];

echo count($vippersons);//3
var_dump($vippersons);

echo $vippersons[0]["name"];//aung aung
echo $vippersons[0]["age"];//20

echo $vippersons[2]["name"];//nu nu
echo $vippersons[1]["age"];//18

?>