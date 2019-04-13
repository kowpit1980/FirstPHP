<?php 

// a complex array 
$myvar = array( 
	'hello', 
	42, 
	array(1, 'two'), 
	'apple'
); 

// convert to a string 
$string = serialize($myvar); 

// printing the serialized data 
echo $string; 

?> 
