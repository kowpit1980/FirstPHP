


<?php

require ("db.php");
if(isset($_POST["submitForm"])){
    $nm=$_POST['name']; 
    $email=$_POST['email']; 
    $mobile=$_POST['mobile']; 
    $id=$_POST['id']; 

    $dbh=connectDb(); 

	//connect to MySQL server if (!$dbh)     
    if (!$dbh){
        die ("No connection". mysqli_error()); 
    }

	if (!mysqli_select_db($dbh,"phone_book")) {   
	    die("Unable to select database: " . mysql_error()); 
	    //if selection fails output error message 
    }
	$sql_stmt = "UPDATE `phonebook` SET `name`='$nm',`email`='$email',`mobile`='$mobile' WHERE `id` = $id"; 
    
	$result = mysqli_query($dbh,$sql_stmt); //execute SQL statement 
    
	if (!$result)   {  
        mysqli_close($dbh);
        die("Adding record failed: " . mysqli_error()); 
    }

    mysqli_close($dbh);
    header('Location:'.'/teb/phonebookrecord.php?id=' .$id);
} else {
 
$id = $_GET['id'];

$dbh=connectDb();


if (!$dbh){
    die ("No connection". mysqli_error());

}
if(!mysqli_select_db($dbh,"phone_book")){
    mysqli_close($dbh);
    die ("Unable to connect to database" . mysqli_error());
}

$sql_stmt = "SELECT * FROM phonebook WHERE id=$id" ;
$result = mysqli_query($dbh, $sql_stmt);

if(!$result){
    mysqli_close($dbh);
    die ("Unable to execute query");
}

$rows = mysqli_num_rows($result);

if ($rows) {
    while ($row = mysqli_fetch_array($result)){
    echo 'ID' .$row['id'] . '<br>';
    echo 'name' .$row['name'] . '<br>';
    echo 'email' .$row['email'] . '<br>';
    echo 'mobile' .$row['mobile'] . '<br>';
    ?>
        
     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
        <label for="name">Please enter your name: </label> 
        <input name="name" type="text" value="<?php echo $row['name'];?>"><br> 
        <label for="email">Please enter your email: </label> 
        <input name="email" type="text"  value="<?php echo $row['email'];?>"><br> 
        <label for="mobile">Please enter your mobile: </label> 
        <input name="mobile" type="text"  value="<?php echo $row['mobile'];?>"><br> 
        <input type="submit" value="Submit", name="submitForm"> 
        <input name="id" hidden type="text"  value="<?php echo $row['id'];?>"><br> 

        </form> 
<?php
    }
}
        
mysqli_close($dbh); //close the database connection

}

?>