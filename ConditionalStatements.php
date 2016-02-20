<?php

/*
 * -----------------------------------Conditional statements -----------------------------------------------
 * 
 * 
 * Conditional statements are used to perform different actions based on different conditions.
 * 
 *  Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.
 *  
 *  In PHP we have the following conditional statements:

		-if statement - executes some code if one condition is true
		-if...else statement - executes some code if a condition is true and another code if that condition is false
		-if...elseif....else statement - executes different codes for more than two conditions
		-switch statement - selects one of many blocks of code to be executed
 */


//-------------------------------------------------IF Statement-------------------------------------------------------

//The if statement executes some code if one condition is true.

echo "Current Data and time is " . date("D/M/Y h:i:sa");//If the time you got back from the code is not the right time, it's probably because your server is in another country or set up for a different timezone.

//So, if you need the time to be correct according to a specific location, you can set a timezone to use.


$t = date("H");//Date is a predefine function which gives current date and time .So here H is format in data and time H gives hours in date function


if ($t < "22")//if the current time (HOUR) is less than 20: then "Have a good day will!" statement will be executed
{
	echo "Have a good day!";
}


//OUTPUT:  Have a good day!   NOTE:it depends on server time and date as we didn't set the time zone


//------------------------------------------------------IF...ELSE Statement---------------------------------------------

//The if....else statement executes some code if a condition is true and another code if that condition is false.


$t = date("H");

if ($t < "20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
}


//OUTPUT:  Have a good day!   NOTE:it depends on server time and date as we didn't set the time zone.If your time zone time HOUR is greater then 20Hrs then else statement will be executed.




//----------------------------------------------------IF...ELSEIF....ELSE Statement---------------------------------------

//The if....elseif...else statement executes different codes for more than two conditions.


$t = date("H");

if ($t < "10") {
	echo "Have a good morning!";
} elseif ($t < "20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
}

//OUTPUT:Have a good night!  
//The  above example will output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":
//NOTE:Time and depends on the time zone.




//--------------------------------------------------SWITCH Statement----------------------------------------------------------


//The switch statement is used to perform different actions based on different conditions.
//Use the switch statement to select one of many blocks of code to be executed.


$favcolor = "red";

switch ($favcolor) {
	case "red":
		echo "Your favorite color is red!";
		break;
	case "blue":
		echo "Your favorite color is blue!";
		break;
	case "green":
		echo "Your favorite color is green!";
		break;
	default:
		echo "Your favorite color is neither red, blue, nor green!";
}

//This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. The default statement is used if no match is found

// OUTPUT: Your favorite color is red!


	







?>