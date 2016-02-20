<?php
/*
 * ----------------------------------FOR Loop-------------------------------------------------
 * 
 * PHP for loops execute a block of code a specified number of times.
 * The for loop is used when you know in advance how many times the script should run.
 * 
 * Parameters:

		-init counter: Initialize the loop counter value
		-test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
		-increment counter: Increases the loop counter value
		-The example below displays the numbers from 0 to 10:
 */


//------------EXAMPLE-1-----

for ($x = 0; $x <= 10; $x++) {
	echo "The number is: $x <br>";
}


/*
 * OUTPUT:
 *  The number is: 0 
The number is: 1 
The number is: 2 
The number is: 3 
The number is: 4 
The number is: 5 
The number is: 6 
The number is: 7 
The number is: 8 
The number is: 9 
The number is: 10 
 */



//---------EXAMPLE-2

for ($x = 0; $x <= 10; $x++)
{
	for ($y = 0; $y <= $x; $y++)
	{
	
	echo "$x";
	}
	echo "<br/>";
	
}


/*
 * OUTPUT:        
 *
  
0
11
222
3333
44444
555555
6666666
77777777
888888888
9999999999
1010101010101010101010

 */


?>