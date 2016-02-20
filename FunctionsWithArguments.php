<?php
/*
 *         ---------------------------------------------FUNCTIONS ARGUMENTS------------------------------------------
 *         
 *         
 *          	Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
 */


/*
 * The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:
 * 
 */


function familyName($fname) {
	echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");


/*
 * OUTPUT: 
 * Jani Refsnes.
Hege Refsnes.
Stale Refsnes.
Kai Jim Refsnes.
Borge Refsnes.
 */


//--------------------EXAMPLE-2 
 //The following example has a function with two arguments ($fname and $year):




function familyNameAndDOB($fname, $year) {
	echo "$fname Refsnes. Born in $year <br>";
}

familyNameAndDOB("Hege", "1975");
familyNameAndDOB("Stale", "1978");
familyNameAndDOB("Kai Jim", "1983");

/*
 * OUTPUT:
 * 
 *Hege Refsnes. Born in 1975 
Stale Refsnes. Born in 1978 
Kai Jim Refsnes. Born in 1983
 */


/*
 * ----------------------------------------------------Functions with Default Argument Value------------------------------------
 * 
 * The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
 */



function setHeight($minheight = 50) {
	echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);


/*
 * OUTPUT: 
 * 
 *The height is : 350 
The height is : 50 
The height is : 135 
The height is : 80 
 */

//--------------------------------------Functions with Returning values-----------------------------------------------------
//To let a function return a value, use the return statement: 


function sum($x, $y) {
	$z = $x + $y;
	return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);


/*
 * OUTPUT:
 * 
5 + 10 = 15
7 + 13 = 20
2 + 4 = 6
 */

?>