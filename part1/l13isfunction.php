<?php
//=> Check Variable Type

//=>is_string(variable)Function

$val1 = "save myanmar";
echo "val1 is ". is_string($val1);//1
echo var_dump($val1);// string(12) "save myanmar"
echo gettype($val1);// string
$val2 = 0;
echo "val2 is ". is_string($val2);

$val3 = 50;
echo "val3 is". is_string($val3);

$val4 = "50";
echo "val4 is ". is_string($val4);//1

$val5 = true;
echo "val5 is". is_string($val5);



// => is_numeric(variable) Function

$val7 = 50;
echo "val7 is ". is_numeric($val7); //1
echo "val7 is ". is_int($val7); // 1
echo "val7 is". is_integer($val7); // 1
echo gettype($val7); //integer

$val8 = 34.56;
echo "val8 is ". is_numeric($val8); //1
echo "val8 is ". is_int($val8); 
echo "val8 is". is_integer($val8);
echo gettype($val8);// float
echo gettype($val8);// double


$val9 = "50";
//*************** 
echo "val9 is ". is_numeric($val9); //1

echo "val9 is ". is_int($val9); 
echo "val9 is". is_integer($val9);


// => is_float(variable) Function

$val9 = 40;
echo "val9 is". is_float($val9);

$val10 = 34.56;
echo "val10 is". is_float($val10);

$val11 = "34.56";
echo "val11 is". is_float($val11);

//=> is_bool(variable) Function

$val12 = true;
echo "val12 is". is_bool($val12); // 1
echo gettype($val12); // boolean

$val13 = FALSE;
echo "val13 is". is_bool($val13); // 1

$val14 = 1;
echo "val14 is". is_bool($val14);

$val15 = "true";
echo "val15 is". is_bool($val15);


//=> is_array(variable) Function

$val16 = "Help Myanmar";
echo "val16 is". is_array($val16);

// $val17 = ["aung aung", "su su"];
$val17 = array("aung aung","su su");
echo "val17 is". is_array($val17); //1
echo gettype($val17);// array


// => is_null(variable) Function

$val18 = 0;
echo "val18 is". is_null($val18);

$val19 = null;
echo "val19 is". is_null($val19);//1

$val20 = Null;
echo "val20 is". is_null($val20); //1

$val21 = NULL;
echo "val21 is". is_null($val21); //1

$val22 = "null";
echo "val22 is". is_null($val22);


//=> empty(variable) VS isset(variable
// Note :: the following values are empty

// 0
// 0.0
// "0"
// ""
// NULL
// FALSE 
// []
//variable;

$val21 = [];

if(empty($val21)){
    echo "Your variable is empty";
}

if(isset($val21)){
    echo "Your variable with value";
}else{
    echo "Your variable without value"
}


//=> isset() Vs unset()

//$city;
$city = "Yangon";
$country = "Thailand";
echo isset($city) ? "Yes" :"No";
echo $city; //Yangon
echo $country; //Thailand

unset($city,$country);
echo $city;
echo $country;

?>