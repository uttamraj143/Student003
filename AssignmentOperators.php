<?php
/*
 * -------------------------------Assignment Operators----------------------------------------
 * 
 * The PHP assignment operators are used with numeric values to write a value to a variable.

The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.
 */

$x = 10;//The left operand gets set to the value of the expression on the right.Value 10 is assigned to variable x
echo $x;//Output 10
echo  "<br/>";


$y = 20;
$y += 100;  //Addition assignment operator
echo $y;//Output 120


echo  "<br/>";
$z = 50;
$z -= 30;//Subtraction assignment operator
echo $z;//Output 20

echo  "<br/>";

$x = 10;
$y = 6;
echo $x * $y;// Multiplication assignment operator 
//Output 60


?>