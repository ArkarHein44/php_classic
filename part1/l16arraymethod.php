<?php
//=>array_combine(key,value) Function

$name = array("aung aung", "su su", "kyaw kyaw", "hla hla");

$age = [30, 25, 35, 40];
$result = array_combine($name, $age);
echo "<pre>" . print_r($result, true) . "</pre>";
// <pre>Array
// (
//     [aung aung] => 30
//     [su su] => 25
//     [kyaw kyaw] => 35
//     [hla hla] => 40
// )
// </pre>
echo $result["kyaw kyaw"];//35

//=>count(array) Function
$vehicles = ["toyota", "ford", "audi", "mazda", "suzuki", "ford", "mazda", "bmw"];
echo count($vehicles);//8

//array_count_values(array) Function
$cars = ["toyota", "ford", "audi", "mazda"];
echo "<pre>" . print_r(array_count_values($cars), true) . "</pre>";
//<pre>Array
// (
//     [toyota] => 1
//     [ford] => 1
//     [audi] => 1
//     [mazda] => 1
// )
// </pre>

$brands = ["toyota", "ford", "audi", "mazda", "suzuki", "ford", "mazda", "bmw", "Toyota"];
echo "<pre>" . print_r(array_count_values($brands), ture) . "</pre>";
//<pre>Array
// (
//     [toyota] => 1
//     [ford] => 2
//     [audi] => 1
//     [mazda] => 2
//     [suzuki] => 1
//     [bmw] => 1
//     [Toyota] => 1
// )
// </pre>

//=>array_chunk[array,length] function
//=>array_chunk(array,length,preservekey)
$couples = ["aung aung", "su su", "kyaw kyaw", "nu nu", "tun tun", "yin yin", "zaw zaw", "aye aye"];
$result1 = array_chunk($couples);
echo "<pre>" . print_r($result1, true) . "</pre>";//
echo $result1[0][1];// su su

$result2 = array_chunk($couples, 2, true);
echo "<pre>" . print_r($result2, true) . "</pre>";

$result3 = array_chunk($couples, 3, false);
echo "<pre>" . print_r($result3, true) . "</pre>";//

//=> array_diff(array1,array2,...) Function
//Note :: we don't need to consider any index or keyname

$color1 = ["red", "green", "blue", "pink"];
$color2 = ["red", "blue", "pink", "silver"];
$color3 = ["green", "blue", "orange", "violet"];

echo "<pre>" . print_r(array_diff($color1, $color2), true) . "</p>";
echo "<pre>" . print_r(array_diff($color2, $color1), true) . "</p>";
echo "<pre>" . print_r(array_diff($color1, $color2, $color3), true) . "</p>";

$col1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$col2 = ["e" => "red", "f" => "green", "g" => "black"];
echo "<pre>" . print_r(array_diff($col1, $col2), true) . "</p>";
echo "<pre>" . print_r(array_diff($col2, $col1), true) . "</p>";

//=> array_diff_assoc(array1,array2,...) Function
// Note:: we need to consider any keyname and value (just for assoc array)
$col1 = ["a" => "red", "b" => "yellow", "c" => "blue", "d" => "green"];
$col2 = ["a" => "red", "b" => "green", "c" => "blue"];
echo "<pre>" . print_r(array_diff_assoc($col1, $col2), true) . "</p>";
echo "<pre>" . print_r(array_diff_assoc($col2, $col1), true) . "</p>";

//=> array_diff_key(array1,array2,...) Function
// Note:: we need to consider any keyname (just for assoc array)
$col1 = ["a" => "red", "b" => "yellow", "c" => "blues", "d" => "green", "f" => "pink"];
$col2 = ["a" => "red", "b" => "green", "c" => "blue", "e" => "orange"];
echo "<pre>" . print_r(array_diff_key($col1, $col2), true) . "</p>";
echo "<pre>" . print_r(array_diff_key($col2, $col1), true) . "</p>";


//=> array_interset(array1,array2,...) Function
// Note:: we don't need to consider any keyname 
$num1 = [10, 20, 30, 60, 70, 80];
$num2 = [10, 20, 30, 40, 50, 90, 80];
echo "<pre>" . print_r(array_intersect($num1, $num2), true) . "</p>";
echo "<pre>" . print_r(array_diff_key($num2, $num1), true) . "</p>";


$col1 = ["a" => "red", "b" => "green", "c" => "blues", "d" => "yellow"];
$col2 = ["a" => "red", "b" => "green", "d" => "orange"];
echo "<pre>" . print_r(array_intersect($col1, $col2), true) . "</p>";
echo "<pre>" . print_r(array_intersect($col2, $col1), true) . "</p>";

//=>array_fill(startindex,count,value) Function
echo "<pre>" . print_r(array_fill(0, 5, "green"), true) . "</pre>";
echo "<pre>" . print_r(array_fill(2, 5, "blue"), true) . "</pre>";

//=>array_fill_keys(keys,value) Function
$keys = ["a", "b", "c", "d"];
$values = ["red", "green", "blue", "pink"];
echo "<pre>" . print_r(array_fill_keys($keys, "pink"), true) . "</pre>";
echo "<pre>" . print_r(array_fill_keys($keys, $values), true) . "</pre>";


//=> array_key_exists(key,array)Function (just for assoc array)
$operators = ["mpt" => "ftth", "ooredoo" => "broadband"];

if (array_key_exists("mpt", $operators)) {
    echo "key exists";
} else {
    echo "key does not exists";
}

//=>array_merge(array1,array2,...)Function
$arr1 = ["red", "green"];
$arr2 = array("blue", "yellow");
$arr3 = ["orangw", "violet"];
echo "<pre>" . print_r(array_merge($arr1, $arr2), true) . "</pre>";
echo "<pre>" . print_r(array_fill_keys($arr1, $arr2, $arr3), true) . "</pre>";

//=>array_keys(array) Function
// => array_keys(array,value) Function
// => array_keys(array,value,strict) Function

$phone = ["mpt" => "ftth", "ooredoo" => "broadband", "telenor" => "wifi"];

echo "<pre>" . print_r(array_keys($phones), true) . "</pre>";
echo arrray_key($phones)[1]; //ooredoo

echo "<pre>" . print_r(array_keys($phones, "broadband"), true) . "</pre>";//
echo array_keys($phones, "broadband")[0];


$number = [10, 20, 30, "10"];
echo "<pre>" . print_r(array_keys($number, "10"), true) . "</pre>";// 
echo "<pre>" . print_r(array_keys($number, 10), true) . "</pre>";//
echo "<pre>" . print_r(array_keys($number, "10", false), true) . "</pre>";//

echo "<pre>" . print_r(array_keys($number, 10, true), true) . "</pre>";//
echo "<pre>" . print_r(array_keys($number, "10", true), true) . "</pre>";//

// => array_map(callback,array1,array2,array3,...) Function

$males = ["tun tun", "aung aung ", "kyaw kyaw", "thura", "zaw zaw"];
$females = array("hla hla", "su su", "nu nu", "yu yu", "thida");

function genderone($name)
{
    return ("Mr." . $name);
}
;

echo "<pre>" . print_r(array_map("genderone", $males), true) . "</pre>";//

function gendertwo($males, $females)
{
    return ($males . "&" . $females);
}
;
echo "<pre>" . print_r(array_map("gendertwo", $males, $females), true) . "</pre>";//

//=> sort(array) Function
$cars = ["volvo","bmw","toyota","mazda","suzuki"];
sort($cars);
echo "<pre>".print_r($cars,true)."</pre>";

$numbers = [10,50,"80",90,35,"100",130,"250",70];
sort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>";

//=> array_multisort(array) Function
$carbrands = ["volvo","bmw","toyota","mazda","suzuki"];
array_multisort($carbrands);
echo "<pre>".print_r($carbrands,true)."</pre>";

$luckynumbers = [10,50,"80",90,35,"100",130,"250",70];
array_multisort($luckynumbers);
echo "<pre>".print_r($luckynumbers,true)."</pre>";

//=. array_pad(array,length,value) Function
$colors = ["red","green"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>";

//=> array_reverse(array) Function

$vehicles = ["volvo","bmw","toyota","mazda","suzuki"];
sort($vehicles);
echo "<pre>".print_r(array_reverse($vehicles),true)."</pre>";

$winnumbers = [10,50,"80",90,35,"100",130,"250",70];
array_multisort($luckynumbers);
echo "<pre>".print_r(array_reverse($winnumbers),true)."</pre>";


//=> array_pad(array,length,value) Function
$colors =["red","green"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>";

//=> array_reduce(array,callback,initial) Function

$nums = [10,"20",30];

function calfun($total,$val){
    return $total += $val;
};

echo array_reduce($nums,"calfun",0);//

//=array_sum(array) Function (array ပေါင်းမယ်)
$nums = [10,20,30,40,50];
echo array_sum($nums); //150

$nums -  [10,20,30,"40",-50];
echo array_sum($nums);//50

$nums = ["a"=>10.2,"b"=>20.3,"c"=>30.3];
echo array_sum($nums);//60.8

//=> array_pop(array) Function
$colors = ["red","green","blue"];
array_pop($colors);
echo "<pre>".print_r($colors,true)."</pre>";

//=> array-search(value,array) Function
$myarrs = ["a","b","c","d","e"];
echo array_search("d",$myarrs);

$myarrs = ["a"=>"red","b"=>"green","c"=>"violet","d"=>"black","e"=>"blue"];

echo array_search("green",$myarrrs);

//=>array_shift() Function

$colors = ["red0","green","blue"];
array_shift($colors);
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"violet"];
array_shift($colors);
echo "<pre>".print_r($colors,true)."</pre>";


//unset(arrayindex) Function and array_values(array)
$colors = ["red0","green","blue"];
// unset($colors);
// echo "<pre>".print_r($colors,true)."</pre>";

unset($colors[1]);
$colors = ["red0","green","blue"];
unset($colors);
// echo "<pre>".print_r(array_values($colors),true)."</pre>";

$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"violet"];
// echo "<pre>".print_r(array_values($colors),true)."</pre>";

$infos = ["name"=>"aung aung","age"=>"20","city"=>"yangon"];
echo  "<pre>".print_r(array_values($infos),true)."</pre>";


//=> array_unshift(value,value1,value2,value3,...) Function
$colors = ["red","green","blue"];
array_unshift($colors,"silver","violer");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["0"=>"red","1"=>"green","2"=>"blue"];
array_unshift($colors,"silver","violer");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["a"=>"red","b"=>"green","c"=>"blue"];
array_unshift($colors,"silver","violer");
echo "<pre>".print_r($colors,true)."</pre>";



//=> array_push(value,value1,value2,value3,...) Function
$colors = ["red","green","blue"];
array_push($colors,"silver","violer");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["0"=>"red","1"=>"green","2"=>"blue"];
array_push($colors,"silver","violer");
echo "<pre>".print_r($colors,true)."</pre>";

$colors = ["a"=>"red","b"=>"green","c"=>"blue"];
array_push($colors,"silver","violer");
echo "<pre>".print_r($colors,true)."</pre>";


// array ကို ပိုင်းမယ်
//=> array_slice(array,offset/index) Function
//=> array_slice(array,offset/index,length)

$candycolors = ["red","green","blue","yellow","pink"];

echo "<pre>".print_r(array_slice($candycolors,0),true)."</pre>"; // [red to pink]
echo "<pre>".print_r(array_slice($candycolors,2),true)."</pre>"; //[blue to pink]
echo "<pre>".print_r(array_slice($candycolors,0,2),true)."</pre>"; //[red , green]
echo "<pre>".print_r(array_slice($candycolors,2,2),true)."</pre>";// [blue,yellow]
echo "<pre>".print_r(array_slice($candycolors,2,5),true)."</pre>"; //[blue , yelow , pink]

echo "<pre>".print_r(array_slice($candycolors,2,5,false),true)."</pre>"; // [0,1,2]

echo "<pre>".print_r(array_slice($candycolors,2,5,true),true)."</pre>";  //[2,3,4]


//=> array_splice(array,offset/index) Function
//=> array_splice(array,offset/index,length)
//=> array_splice(array,index,length,array)

$shirtcolors = ["red","green","blue","yellow","pink"];

echo "<pre>".print_r(array_splice($shirtcolors,0),true)."</pre>"; // [red to pink]
echo "<pre>".print_r(array_splice($shirtcolors,2),true)."</pre>"; //[blue to pink]
echo "<pre>".print_r(array_splice($shirtcolors,0,2),true)."</pre>"; //[red , green]
echo "<pre>".print_r(array_splice($shirtcolors,2,2),true)."</pre>";// [blue,yellow]
echo "<pre>".print_r(array_splice($shirtcolors,2,5),true)."</pre>"; //[blue , yelow , pink]

echo "<pre>".print_r(array_splice($shirtcolors,2,5,false),true)."</pre>"; // [0,1,2]

echo "<pre>".print_r(array_splice($shirtcolors,2,5,true),true)."</pre>";  //[2,3,4]

$females = ["aung aung","maung maung","kyaw kyaw","zaw zaw","naung naung"];
$females = ["su su","yu yu",'nu nu'];

//array_splice($males,0,2,$females);
//echo "<pre>".print_r($males,true)."</pre>"; 

// array_splice($males,0,3,$females);
// echo "<pre>".print_r($males,true)."</pre>"; 

array_splice($males,1,3,$females);
echo "<pre>".print_r($males,true)."</pre>"; //aung aung ကနေစမယ် array ၂ခုလုံးရဲ့  index no.  အလိုက် sort လုပ်မယ်

//=> array_unique(array)Function

$nums = [10,20,30,50,10,30,60,70,80,10];
echo "<pre>".print_r(array_unique($nums),true)."</pre>";

$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue"];
echo "<pre>".print_r(array_unique($colors),true)."</pre>";


//=>array_walk(array,callbackfunction) Function
//=>array_walk(array,callbackfunction,parameter)
$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue"];
 
function myfunone($val,$key){
    echo "Key is = $key and Value is $val. ";
}

array_walk($colors,"myfunone");

function myfuntwo($val,$key,$p){
    echo "Key is = $key and Value is $val $p";
}

array_walk($colors,"myfuntwo","colour");

function myfunthree(&$val){
    $val = "orange";
    return $val;
}

array_walk($colors,"myfunthree");
echo "<pre>".print_r($colors,true)."</pre>";


//=> compact(var1,var2,var3,...) Function

$name = "Aung Aung";
$age = "25";
$city = "Yangon";

$result = compact("name","age","city");

echo "<pre>".print_r($result,true)."</pre>";


//=>range(start,end) Function
//=>range(start,end,step) Function

$num1 = range(0,5);
echo "<pre>".print_r($num1,true)."</pre>";

$num2 = range(0,50,10);
echo "<pre>".print_r($num2,true)."</pre>";

$char1 = range("a","k");
echo "<pre>".print_r($char1,true)."</pre>";

$char2 = range("k","g");
echo "<pre>".print_r($char2,true)."</pre>";

//=> sizeof(array) Function
$colors = ["red","green","blue","yellow","pink"];
echo iszeof($colors);

//=>current(),pos(),next(),end(),prev(),reset() Function

$students = ["aung aung","maung maung","zaw zaw","tun tun","kyaw kyaw"];

//echo current($students);

//echo pos($students);

//echo end($students);
//echo current($students);

//echo current($students);'
//echo  next($students);
//echo current($students);'
//echo  next($students);
//echo  prev($students);

echo end($students);
echo current($students);
echo prev($currents);

echo reset($students);

//=>serialize (), unserialize() Function

$staffs = [
    ["aung aung","maung maung","kyaw kyaw","tun tun","zaw zaw"],
    ["su su","yu yu","nu nu","aye aye","hla hla"]
];

echo "<pre>".print_r($staffs,true)."</pre>";

$seriadatas = serialize($staffs);
echo $seriadatas;
var_dump($seriadatas);

$unseriadatas = unserialize($seriadatas);
echo "<pre>".print_r($unseriadatas,true)."</pre>";






?>