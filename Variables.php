<?php
/*
 *--------------------Title Variables------------------
 *
 *This file will explain what are variables in PHP
 *
 *
 *    Variables are "containers" for storing information.
 *    In PHP, a variable starts with the $ sign, followed by the name of the variable:
 *    Think of variables as containers for storing data.
       
       A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)

 */


//In the below example we are assigning 5 to the vaiable 'x' and 4 to the variable 'y' where x and y are variables which stores 5 and 4 value in them.


//a variable starts with the $ sign, followed by the name of the variable:


$x = 5;
$y = 4;
echo $x + $y;


/*
 In the example above, notice that we did not have to tell PHP which data type the variable is.

 PHP automatically converts the variable to the correct data type, depending on its value.

 In other languages such as C, C++, and Java, the programmer must declare the name and type of the variable before using it.

 */


?>

//The PHP echo statement is often used to output data to the screen.
//The above example will output the sum of two variables as:9







