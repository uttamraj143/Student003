<?php
/*
 * ---------------------------------------------------ARRAYS----------------------------------------
 * 
 * An array stores multiple values in one single variable:

An array is a special variable, which can hold more than one value at a time.

If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:

$cars1 = "Volvo";
$cars2 = "BMW";
$cars3 = "Toyota";

However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?

The solution is to create an array!

An array can hold many values under a single name, and you can access the values by referring to an index number


In PHP, the array() function is used to create an array:

array();


In PHP, there are three types of arrays:

			-Indexed arrays - Arrays with a numeric index
			-Associative arrays - Arrays with named keys
			-Multidimensional arrays - Arrays containing one or more array
 */

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

/*
 * OUTPUT: I like Volvo, BMW and Toyota.
 */



//--------------------------------------------------Indexed Arrays---------------------------------------

/*
 * There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like this:

$cars = array("Volvo", "BMW", "Toyota");
          OR
or the index can be assigned manually:
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
 */

//------------------------------------------------Get The Length of an Array - The count() Function-------------------------

//The count() function is used to return the length (the number of elements) of an array:

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);


//OUTPUT: 3



//EXAMPLE-2------------------------------------Loop Through an Indexed Array---------------------------------------

//To loop through and print all the values of an indexed array, you could use a for loop, like this:




$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
	echo $cars[$x];
	echo "<br>";
}	


/*
 * OUTPUT:
  Volvo
BMW
Toyota
 */





//--------------------------------------------Associative Arrays------------------------------------------------------

/*
 * Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
               OR
 $age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";



The named keys can then be used in a script:


 */

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

/*
 * OUTPUT:   Peter is 35 years old.
 */



//------------------------------------------------Loop Through an Associative Array-----------------------------------------
//To loop through and print all the values of an associative array, you could use a foreach loop, like this:

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
}

/*
 * OUTPUT:   
 *        Key=Peter, Value=35
Key=Ben, Value=37
Key=Joe, Value=43
 */




//Complete details can be found in http://www.w3schools.com/php/php_ref_array.asp
?>