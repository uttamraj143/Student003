<?php
/*
 *   -------------------------Title Static Keyword------------------------
 *   
 *   Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable:
 */


function myTest() {
	static $x = 0;// we are assigining static keyword to x variable so x memory will not be deleted through the program.
	echo $x;
	$x++;
}

myTest();
myTest();
myTest();



/*
 * Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.

Note: The variable is still local to the function.	
 */



/*Output:  0
           1
           2
*/
?>