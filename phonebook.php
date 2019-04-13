<?php 

require ("db.php");

$dbh=connectDb();

if (!$dbh){
die ("No connection". mysqli_error());

}
if(!mysqli_select_db($dbh,"phone_book")){
die ("Unable to connect to database" . mysqli_error());
}

$sql_stmt = "SELECT * FROM phonebook";
$result = mysqli_query($dbh, $sql_stmt);

if(!$result){
    die ("Unable to execute query");
}

$rows = mysqli_num_rows($result);

if ($rows) {
while ($row = mysqli_fetch_array($result)){
    echo 'ID' .$row['id'] . '<br>';
    echo 'name' .$row['name'] . '<br>';
}

}
mysqli_close($dbh);
?>