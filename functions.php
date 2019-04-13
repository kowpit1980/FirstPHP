<?php 

// function along with three parameters 
function proGeek($num1, $num2, $num3) 
{ 
	$product = $num1 * $num2 * $num3; 
    echo "The product is $product"; 
    echo "<br>";
} 

// Caling the function 
// Passing three arguments 
proGeek(2, 3, 5); 
proGeek(7, 8, 11);
proGeek(8, 1, 4);
proGeek(5, 8, 9);
?> 

<br/>

<?php 

// pass by value 
function valGeek($num) { 
	$num += 2; 
	return $num; 
} 

// pass by reference 
function refGeek(&$num) { 
	$num += 10; 
	return $num; 
} 

$n = 10; 

valGeek($n); 
echo "The original value is still $n \n"; 

refGeek($n); 
echo "The original value changes to $n"; 

?> 

