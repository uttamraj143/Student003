<?php
/*
 * ------------------------------------------DO...WHILE Loop--------------------------------------------------
 * The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.
 * 
 * 
 */


//The example below first sets a variable $x to 1 ($x = 1). Then, the do while loop will write some output, and then increment the variable $x with 1. Then the condition is checked (is $x less than, or equal to 5?), and the loop will continue to run as long as $x is less than, or equal to 5:


$x = 1;

do {
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);


/*
 * OUTPUT:
 *        The number is: 1 
The number is: 2 
The number is: 3 
The number is: 4 
The number is: 5
 */


$x = 6;

do {
	echo "The number is: $x <br>";
	$x++;
} while ($x<=5);


/*
 *   OUTPUT:The number is: 6 
 */

//Notice that in a do while loop the condition is tested AFTER executing the statements within the loop. This means that the do while loop would execute its statements at least once, even if the condition is false the first time.

//The example below sets the $x variable to 6, then it runs the loop, and then the condition is checked:

?>