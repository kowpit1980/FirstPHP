<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Moja strona php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>
<?php 
echo "Hello,This is a display string example!"; 
?> 
</h1>
<h2>
<?php 
echo "Multiple ","argument ","string!"; 
?>  
</h2>

<h2>
<?php 
//defining the variables 
$text = "Hello, World!"; 

$num1 = 10; 

$num2 = 20; 

//echoing the variables 
echo $text."\n"; 

echo $num1."+".$num2."="; 

echo $num1 + $num2; 
?> 

</h2>

<h2>
<?php 
  
$num = 60; 
  
function local_var() 
{    
    // This $num is local to this function 
    // the variable $num outside this function 
    // is a completely different variable 
    //$num = 50;
    global $num; 
    echo "local num = $num \n"; 
} 
  
local_var(); 
  
// $num outside function local_var() is a  
// completely different Variable than that of  
// inside local_var() 
echo "Variable num outside local_var() is $num \n"; 
  
?> 
</h2>

<p>
<?php 
  
// function to demonstrate static variables 
function static_var() 
{    
    // static variable 
    static $num = 5; 
    $sum = 2; 
      
    $sum++; 
    $num++; 
      
    echo $num, "\n"; 
    echo $sum, "\n"; 
} 
  
// first function call 
static_var(); 
  
// second function call 
static_var(); 
  
?> 
</p>

<p>
<?php 
  
$name = "Krishna"; 
echo "The name of the Geek is $name <br/>";
echo "<h1>";
echo 'The name of the geek is $name'; 
  echo "</h1>";
?> 
</p>

</body>
</html>

