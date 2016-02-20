<?php
/*
 * --------------------------------------Sorting Arrays---------------------------------------
 * 
 * The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

                  sort() - sort arrays in ascending order
				  rsort() - sort arrays in descending order
      		      asort() - sort associative arrays in ascending order, according to the value
				  ksort() - sort associative arrays in ascending order, according to the key
              	  arsort() - sort associative arrays in descending order, according to the value
				  krsort() - sort associative arrays in descending order, according to the key
 */

//---------EXAMPLE-1

            //-----------------Sort Array in Ascending Order - sort()----------------------------------
            //The following example sorts the elements of the $cars array in ascending alphabetical order:

            
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x <  $clength; $x++) {
     echo $cars[$x];
     echo "<br>";
}

/*
 * OUTPUT:      
 * 
 *  BMW
Toyota
Volvo
 */


//-------EXAMPLE-2
//The following example sorts the elements of the $numbers array in ascending numerical order:

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x <  $arrlength; $x++) {
	echo $numbers[$x];
	echo "<br>";
}

/*
 * OUTPUT:  
2
4
6
11
22
 */




//-------------------------------------Sort Array in Descending Order - rsort()-----------------------------

//The following example sorts the elements of the $cars array in descending alphabetical order:

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x <  $clength; $x++) {
	echo $cars[$x];
	echo "<br>";
}

/*
 * OUTPUT:
Toyota
BMW
 */



//




?>