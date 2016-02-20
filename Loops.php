<?php

/*
 * ------------------------------------------LOOPS--------------------------------------------------------
 * 
 * Often when you write code, you want the same block of code to run over and over again in a row. Instead of adding several almost equal code-lines in a script, we can use loops to perform a task like this.
 * 
 *    loop will be executed untill condition is false
 * In PHP, we have the following looping statements:

		-while - loops through a block of code as long as the specified condition is true
		-do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
		-for - loops through a block of code a specified number of times
		-foreach - loops through a block of code for each element in an array   
 *    
 */



//----------------------------------------------WHILE Loop--------------------------------------------------------

    //The while loop executes a block of code as long as the specified condition is true.
    
$x = 1;

while($x <= 5) {
	echo "The number is: $x <br>";
	$x++;
}


/*OUTPUT: 
 * The number is: 1 
The number is: 2 
The number is: 3 
The number is: 4 
The number is: 5 


*/

    
$x = 1;
while($x <= 5) {
	$y=1;
	while ($y<=$x) {
	echo "$y";
		$y++;
	}
	$x++;//PostIncrement operator
	echo "<br/>";
	
}

//The example below first sets a variable $x to 1 ($x = 1). Then, the while loop will continue to run as long as $x is less than, or equal to 5 ($x <= 5). $x will increase by 1 each time the loop runs ($x++):



/*OUTPUT: 
1
12
123
1234
12345

*/


?>