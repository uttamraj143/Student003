<?php
/*
 * ------------------------------------Comparison Operator----------------------------------------
 * 	comparison operators are used to compare two values (number or string):

 */


$x = 100;
$y = "100";

if($x == $y)
{
  echo "Values are equal";
}
else 
{
  echo "Values are not equal"; 
}

//OUTPUT: Values are equal


//-------------------------------------Identical Comparison Operator-----------------------------

$x = 100;
$y = "100";

if($x == $y)
{
  echo "Values are equal and data types are same";
}
else 
{
  echo "Values are not equal or data types are not equal"; 
} 


//OUTPUT: Values are not equal or data types are not equal    
//As values are same but x is of intertype and y is of string type so else condition will satisfy


//----------------------------------Not equal Comparison Operator----------------------------------- 

$x = 100;
$y = 10;


if($x != $y)
{
	echo "Values are not equal";
}
else
{
	echo "Values are  equal ";
}


//OUTPUT: Values are not equal.
//if condition is satisfied as 100 is not equal to 10

//--------------------------------------	Greater than Comparison Operator----------------------------

$x = 10;
$y = 5;

if($x > $y)
{
	echo "x is greater then y";
}
else
{
	echo "x is not greater then y ";
}

//OUTPUT : x is grater then y

//As 10 is grater then 5 hence if statement will satisty




//--------------------------------------------------Less than Comparison Operator------------------------------------

$x = 6;
$y = 20;
	

if($x < $y)
{
	echo "x is less then y";
}
else
{
	echo "x is greater then y ";
}

//OUTPUT : x is less then y

//As 10 is less then 5  if statement will satisty


//------------------------------------------------------Greater than or equal to Comparison Operator------------------------------------------


$x = 20;
$y = 20;


if($x <= $y)
{
	echo "x is equal to y";
}
else
{
	echo "x is greater then y ";
}

//OUTPUT : x is equal to y

//As 20 is equal to 20  if statement will satisty



//------------------------------------------------		











?>