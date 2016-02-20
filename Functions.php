<?php
/*
 * ------------------------------------------FUNCTIONS----------------------------------------
 * 
 * The real power of PHP comes from its functions; it has more than 1000 built-in functions.
 * 
 *    In functions we have two types of functions 
 *          -PreDefine Functions
 *          -User define Functionsc
 *          
 *          PreDefine functions-Pre define functions which are already define by PHP just we can use those function 
 *           Example:date(),strlen(),etc,.

Besides the built-in PHP functions, we can create our own functions.

A function is a block of statements that can be used repeatedly in a program.

A function will not execute immediately when a page loads.

A function will be executed by a call to the function.

A user defined function declaration starts with the word "function":


Note: A function name can start with a letter or underscore (not a number).

Tip: Give the function a name that reflects what the function does!


 */




/*
 * In the example below, we create a function named "writeMsg()". The opening curly brace ( { ) indicates the beginning of the function code and the closing curly brace ( } ) indicates the end of the function. The function outputs "Hello world!". To call the function, just write its name:
 * 
 */



function writeMsg() {//Declearing a function
	echo "Hello world!";
}

writeMsg(); // call the function
//Here we can call writeMsg functions as many times as we want;



/*
 * OUTPUT:
 *       Hello world!  
 */

?>