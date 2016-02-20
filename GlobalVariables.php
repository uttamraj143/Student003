<?php
/*
 * ---------------------------Title Variables Scope-------------
 * 
 * In PHP, variables can be declared anywhere in the script.

       The scope of a variable is the part of the script where the variable can be referenced/used.
       
       
       PHP has three different variable scopes:

             - local
             -global
             -static
             
             
             You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.
             
             
 */
//------------------Global and Local Scope----------

//  A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

$x = 5; // global scope

function myTest() {
	// using x inside this function will generate an error
	
	//The error will be Notice: Undefined variable: x in C:\xampp\htdocs\***\GlobalVariables.php on line 29
	
	echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

//In the above example we have declared a variable called 'x' out side the function and we are assigning 5 value to that variable.The x variable can be used out side the function only we cannot use that variable in side the fuction

?>



//The above example will output the sum of two variables:Variable x inside function is:

//Variable x outside function is: 5
