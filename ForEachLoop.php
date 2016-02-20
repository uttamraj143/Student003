<?php


/*
 * -----------------------------------------------FOREACH Loop-----------------------------------------
 * 
 * 	The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

 */

$colors = array("red", "green", "blue", "yellow");//Here we have array with 4 values in it.In array index starts from 0

foreach ($colors as $value) {
	echo "$value <br>";
}


/*
 * OUTPUT:   
 red 
green 
blue 
yellow 
 */

?>