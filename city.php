<!DOCTYPE html> 
<html> 
<head> 
<title></title> 
</head> 
<body bgcolor="blue">	 
	<?php
		$name = $_GET['name']; 
        $city = $_GET['city']; 
        if($name== "look"){
           $img="https://files.brightside.me/files/news/part_11/112505/357455-14266160-R3L8T8D-650-owl-photography-32__880-650-05d603c84e-1478518566.jpg";
        }
        else {
            $img="https://files.brightside.me/files/news/part_11/112505/358855-1d129ffc98083d2f321565e3db9eaa34-650-c260f62090-1478518566.jpg";
        }
        echo "<img src = \"$img\" alt = \"nanilake\" height = \"400\" width=\"500\" />"; 
		echo "<h1>This is ".$name." of ".$city."</h1><br>"; 
	?> 
	<img src = "2.jpg" alt = "nanilake" height = "400" width="500" /> 
</body> 
</html> 
