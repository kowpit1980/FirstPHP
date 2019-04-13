<?php 

require ("db.php");

$dbh=connectDb();

if (!$dbh){
die ("No connection". mysqli_error());

}
if(!mysqli_select_db($dbh,"phone_book")){
die ("Unable to connect to database" . mysqli_error());
}
?>