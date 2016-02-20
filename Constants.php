<?php

	/*
	 *  ---------------------------------------Constants-------------------------------
	 *  
	 *  
	 *  Constants are like variables except that once they are defined they cannot be changed or undefined.
	 *  
	 *  A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.



                 To create a constant, use the define() function.

  Syntax:    define(name, value, case-insensitive)
  
  Parameters:
	
		-name: Specifies the name of the constant
		-value: Specifies the value of the constant
		-case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false


	 */




define("GREETING", "Welcome to W3Schools.com! <br/>");//we declared greeting as a constant through this program the greeting variable will be constant or fixed as Welcome to W3Schools.com! 


define("Test", "Welcome to Druapl Student site!");

function myTest() {
	echo Test;
	
}

echo GREETING;


myTest();





/*
 * OUTPUT:  Welcome to W3Schools.com!
 * 
 */

?>