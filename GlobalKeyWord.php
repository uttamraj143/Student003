<?php
/*
 * -----------------Title Global KeyWord------------------
 * 
 *     The global keyword is used to access a global variable from within a function.

        To do this, use the global keyword before the variables (inside the function):

 */


$x = 5;
$y = 10;

function myTest() {
	global $x, $y;//We are assigning global key word to the X and Y variable so now we can use x and y variable through the program;
	$y = $x + $y;
}

myTest();
echo $y; 
//As we have assign y with global key word y became global to the program file.

/*
 * PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
 * 
 */





//This program will generate a  outputs as:15

?>
