<?php
/*
 * ----------------------------------------------------------Increment / Decrement Operator-----------------------------
 * 
 * 	The PHP increment operators are used to increment a variable's value.

	The PHP decrement operators are used to decrement a variable's value.
 */


//-----------------------Pre-increment--------------------

// Increments $x by one, then returns $x
$x = 10;
echo ++$x;//Increments $x by one, and then returns $x
echo "<br/>";


//OUTPUT: 11

//---------------------Post-increment-------------------
//Returns $x, then increments $x by one

$x = 20;
echo $x++;//first it will Returns $x, and then increments $x by one
echo  $x;
echo "<br/>";

//OUTPUT:20
 //         21

//---------------------Pre-decrement---------------------
//Decrements $x by one, then returns $x

$x = 10;
echo --$x;//first it will Decrements $x by one,and then returns $x
echo "<br/>";

//OUTPUT: 9

//--------------------------Post-decrement---------------------

$x = 10;
echo $x--;//first it will return $x by one,and then increment $x
echo  $x;
echo "<br/>";

//OUTPUT: 10
//         9
?>