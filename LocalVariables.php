<?php

/*
 * ----------------------Title Local Variables---------------
 *         
 *         
 *         A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
 *         
 * 	
 */

function myTest() {
	$x = 5; // local scope
	echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
//Notice: Undefined variable: x in C:\xampp\htdocs\****\LocalVariables.php on line 21

echo "<p>Variable x outside function is: $x</p>";

/*
 *  In the above example we have declared X variable inside a function with value 5
 */

?>

// The above example will generate a output :Variable x inside function is: 5

Variable x outside function is: