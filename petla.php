<?php  
  
// code to illustrate for loop 
for ($num = 1; $num <= 10; $num += 1.38) { 
    echo "$num \n"; 
}  
  
?> 
<br/>

<?php 

// PHP code to illustrate while loops 
$num = 2; 

while ($num < 12) { 
	$num += 2; 
	echo $num, "\n"; 
} 

?> 
<br/>
<?php 

// PHP code to illustrate do...while loops 
$num = 32; 
do { 
	$num += 2; 
	echo $num, "\n"; 
} while ($num < 12); 

?> 
<br/>
<?php 

// PHP code to illustrate the difference of two loops 
$num = 2; 

// In case of while 
while ($num != 2) { 
	
	echo "In case of while the code is skipped"; 
	echo $num, "\n"; 

} 
// In case of do...while 
do { 
	
	$num++; 
	echo "The do...while code is executed atleast once "; 
	
} while($num == 2); 

?> 



