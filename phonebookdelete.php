<?php

require ("db.php");
 $dbh=connectDb(); 
 $id = $_GET['id'];


if (!$dbh){
    die ("No connection". mysqli_error());

}
if(!mysqli_select_db($dbh,"phone_book")){
    mysqli_close($dbh);
    die ("Unable to connect to database" . mysqli_error());
}

$sql_stmt = "DELETE FROM phonebook WHERE id=$id" ;
$result = mysqli_query($dbh, $sql_stmt);

if(!$result){
    mysqli_close($dbh);
    die ("Unable to execute query");
}
      
mysqli_close($dbh); //close the database connection


?>