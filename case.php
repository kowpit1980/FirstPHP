<?php 
$n = "February"; 

switch($n) { 
	case "January": 
		echo "Its January"; 
		break; 
	case "February": 
		echo "Its February"; 
		// break; 
	case "March": 
		echo "Its March"; 
		// break; 
	case "April": 
		echo "Its April"; 
		break; 
	case "May": 
		echo "Its May"; 
		// break; 
	case "June": 
		echo "Its June"; 
		break; 
	case "July": 
		echo "Its July"; 
		break; 
	case "August": 
		echo "Its August"; 
		break; 
	case "September": 
		echo "Its September"; 
		break; 
	case "October": 
		echo "Its October"; 
		break; 
	case "November": 
		echo "Its November"; 
		break; 
	case "December": 
		echo "Its December"; 
		break; 
	default: 
		echo "Doesn't exist"; 
} 
?> 
<?php 
$x = "February"; 

if ($x = "February") { 
	echo "Jest Luty ubierz buty \n"; 
} 
else { 
	echo "Mamy inny miesiąc więc ubierz się jak chcesz \n"; 
} 

// This whole lot can be written in a 
// single line using ternary operator 
echo ($x = "February") ? 'Zimno co ??;)' : 
				'The number is negative'; 
?> 
