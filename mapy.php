<?php 

// One way to create an associative array 
$name_one = array("Zack"=>"Zara", "Anthony"=>"Any", 
				"Ram"=>"Rani", "Salim"=>"Sara", 
				"Raghav"=>"Ravina", "Piotr"=>"30"); 

// Second way to create an associative array 
$name_two["zack"] = "zara"; 
$name_two["anthony"] = "any"; 
$name_two["ram"] = "rani"; 
$name_two["salim"] = "sara"; 
$name_two["raghav"] = "ravina";
$name_two["Piotr"] = "30"; 

// Accessing the elements directly 
echo "Accessing the elements directly:\n"; 
echo $name_two["zack"], "\n"; 
echo $name_two["salim"], "\n"; 
echo $name_two["anthony"], "\n"; 
echo $name_one["Ram"], "\n"; 
echo $name_one["Raghav"], "\n";
echo $name_two["Piotr"], "\n"; 


foreach ($name_one as $val => $val_value){
    echo "pierwszy element to ".$val." a drugi to 
}

$count = count ($name_one);
echo "<br> jest $count elementów"
?> 
