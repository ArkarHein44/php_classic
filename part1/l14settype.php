<?php
//=> settype(variable,type) Function

$val1 = "50";
echo gettype($val1);//string
settype($val1,"integer");  
echo gettype($val1);//integer

$val2 = 100;
echo gettype($val2);//integer
settype($val2,"string");
echo gettype($val2);   //string

$val3 = true;
echo gettype($val3); //boolean
settype($val3,"integer");
echo gettype($val3); //integer

$val4 = FALSE;
echo gettype($val4); //boolean
settype($val4,"string");
echo gettype($val4); //string
?>