<?php

//=> Comparison Operators

// ==
// ===
// != not equal
// <> not equal
// !==
// >
// <
// >=
// <=
// ? (Ternary Operator)

//Ternary Operator
//echo (stm1 comp stm2) ? true : false;


$num1 = 10;
$num2 = "10";

echo $num1 == $num2 ? "your condition is true" : "your condition is false"; //true
echo ($num1 == $num2) ? "your condition is true" : "your condition is false"; //true
echo ($num1 === $num2) ? "your condition is true" : "your condition is false";//false

echo ($num1 != $num2) ? "your condition is true" : "your condition is false"; //false
echo ($num1 <> $num2) ? "your condition is true" : "your condition is false"; //false

echo ($num1 !== $num2) ? "your condition is true" : "your condition is false";//true

echo ($num1 > $num2) ? "your condition is true" : "your condition is false";
echo ($num1 < $num2) ? "your condition is true" : "your condition is false";
echo ($num1 >= $num2) ? "your condition is true" : "your condition is false";
echo ($num1 <= $num2) ? "your condition is true" : "your condition is false";

?>