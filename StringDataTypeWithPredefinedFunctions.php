<?php
/*
 *  -----------------------String with Predefine functions----------------------------
 *  
 *  	A string is a sequence of characters, like "Hello world!".
 */


//--------------------Get The Length of a String----------------------------------

echo strlen("Hello world!"); // This will show the length of the string "Hello World" Outputs: 12

echo "<br/>";


//-------------------------------------Count The Number of Words in a String----------------------------------------

echo str_word_count("Hello world!"); // str_word_count() function counts the number of words in a string: OUTPUT:2

echo "<br/>";

//---------------------------------Reverse a String--------------------------------------

echo strrev("Hello world!"); // strrev() function reverses a string OUTPUT: !dlrow olleH
echo "<br/>";



//-----------------------------------Search For a Specific Text Within a String-----------------------------------------



echo strpos("Hello world!", "world"); // strpos() function searches for a specific text within a string.If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE
                                     //OUTPUT: 6
echo "<br/>";


//--------------------------------	Replace Text Within a String----------------------------------------------------

echo str_replace("world", "Dolly", "Hello world!"); // PHP str_replace() function replaces some characters with some other characters in a string. OUTPUT: Hello Dolly!
echo "<br/>";






// We can find all predefine string funcations in http://www.w3schools.com/php/php_ref_string.asp




?>







