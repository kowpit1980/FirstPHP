<?php 

// One way to create an indexed array 
$name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav"); 

// Accessing the elements directly 
echo "Accessing the 1st array elements directly:\n"; 
echo $name_one[2], "\n","<br>"; 
echo $name_one[0], "\n","<br>"; 
echo $name_one[4], "\n","<br>"; 

// Second way to create an indexed array 
$name_two[0] = "ZACK"; 
$name_two[1] = "ANTHONY"; 
$name_two[2] = "RAM"; 
$name_two[3] = "SALIM"; 
$name_two[4] = "RAGHAV"; 

// Accessing the elements directly 
echo "Accessing the 2nd array elements directly:\n"; 
echo $name_two[2], "\n"; 
echo $name_two[0], "\n"; 
echo $name_two[4], "\n"; 


foreach ($name_two as $x){
    echo $x."<br>";
}

$count = count ($name_two);
echo "<br> jest $count elementów"


?> 

