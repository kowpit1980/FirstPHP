<?php 

if ( !file_exists("geeks.txt")){
    die ("File is not here");
}

else {


$file = fopen("geeks.txt", "r");
}
echo $file 
?> 
