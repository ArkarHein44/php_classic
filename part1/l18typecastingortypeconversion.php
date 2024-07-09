<?php

//=> Data Types
//string
//int
//float
//bool
//array
//object
//unset


//=>Cast to String

$val1 = "Hello";//string
var_dump($val1);
$result = (string) $val1;
var_dump($result);

$val2 = 10;//integer
var_dump($val2);
$result = (string) $val2;
var_dump($result);

$val3 = 35.46;//float
var_dump($val3);
$result = (string) $val3;
var_dump($result);

$val4 = true;//bool
var_dump($val4);
$result = (string) $val4;
var_dump($result);//true = "1, false = ""


$val5 = NULL;//null
var_dump($val5);
$result = (string) $val5;
var_dump($result);//string (0) ""

//=>Cast to Integer

$val1 = "Hello";//string
var_dump($val1);
$result = (int) $val1;
var_dump($result);//int(0)

$val2 = 10;//integer
var_dump($val2);
$result = (int) $val2;
var_dump($result);

$val3 = 35.67;//float
var_dump($val3);
$result = (int) $val3;
var_dump($result)//int (35)

$val4 = true;//bool
var_dump($val4);
$result = (int) $val4;
var_dump($result);//true = 1, false  0


$val5 = NULL;//null
var_dump($val5);
$result = (int) $val5;
var_dump($result);//int(0)


//=>Cast to Float

$val1 = "Hello";//string
var_dump($val1);
$result = (float) $val1;
var_dump($result);

$val2 = 10;//integer
var_dump($val2);
$result = (float) $val2;
var_dump($result);

$val3 = 35.67;//float
var_dump($val3);
$result = (float) $val3;
var_dump($result)//int (35.67)

$val4 = true;//bool
var_dump($val4);
$result = (float) $val4;
var_dump($result);//true = 1, false  0


$val5 = NULL;//null
var_dump($val5);
$result = (float) $val5;
var_dump($result);//0


//=>Cast to Boolean

$val1 = "Hello";//string
var_dump($val1);
$result = (bool) $val1;
var_dump($result);//true

$val2 = 10;//integer
var_dump($val2);
$result = (bool) $val2;
var_dump($result);//over 0 is true

$val3 = 35.67;//float
var_dump($val3);
$result = (bool) $val3;
var_dump($result)//true

$val4 = true;//bool
var_dump($val4);
$result = (bool) $val4;
var_dump($result);//true 


$val5 = NULL;//null
var_dump($val5);
$result = (bool) $val5;
var_dump($result);//false



//=>Cast to Array

$val1 = "Hello";//string
var_dump($val1);
$result = (array) $val1;
var_dump($result);//array(1)={[0]=>string(5) "Hello"}

$val2 = 10;//integer
var_dump($val2);
$result = (array) $val2;
var_dump($result);//array(1) = {[0]=>int() 10}

$val3 = 35.67;//float
var_dump($val3);
$result = (array) $val3;
var_dump($result)

$val4 = true;//bool
var_dump($val4);
$result = (array) $val4;
var_dump($result);//


$val5 = NULL;//null
var_dump($val5);
$result = (array) $val5;
var_dump($result);//array(0)={}

//=>Cast to Object

$val1 = "Hello";//string
var_dump($val1);
$result = (object) $val1;
var_dump($result);//object(stdClass)#1 (1) {["scaler"]=> string(5) "Hello"}

$val2 = 10;//integer
var_dump($val2);
$result = (object) $val2;
var_dump($result);

$val3 = 35.67;//float
var_dump($val3);
$result = (object) $val3;
var_dump($result)

$val4 = true;//bool
var_dump($val4);
$result = (object) $val4;
var_dump($result);//


$val5 = NULL;//null
var_dump($val5);
$result = (object) $val5;
var_dump($result);//

?>