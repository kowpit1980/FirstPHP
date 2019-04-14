<!DOCTYPE html> 
<html> 
<body> 

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
<label for="name">Please enter your name: </label> 
<input name="name" type="text"><br> 
<label for="email">Please enter your email: </label> 
<input name="email" type="text"><br> 
<label for="mobile">Please enter your mobile: </label> 
<input name="mobile" type="text"><br> 
<input type="submit" value="Submit", name="submitForm"> 
</form> 
<?php
if(isset($_POST["submitForm"])){


$nm=$_POST['name']; 
$email=$_POST['email']; 
$mobile=$_POST['mobile']; 



require ("db.php");
$dbh=connectDb(); 

	//connect to MySQL server if (!$dbh)     
    
    if (!$dbh){
   die ("No connection". mysqli_error());
        
  }

	if (!mysqli_select_db($dbh,"phone_book")) {   
	die("Unable to select database: " . mysql_error()); 
	//if selection fails output error message 
    }
	$sql_stmt = "INSERT INTO `phonebook` (`name`,`email`,`mobile`)"; 
	$sql_stmt .= " VALUES('$nm',' $email ','$mobile')"; 
    
	$result = mysqli_query($dbh,$sql_stmt); //execute SQL statement 
    
	if (!$result)   {  
        mysqli_close($dbh);
        die("Adding record failed: " . mysqli_error()); 
    }
		//output error message if query execution failed echo "Poseidon has been successfully added to your contacts list";

        $dbh=connectDb();

        if (!$dbh){
        die ("No connection". mysqli_error());
        
        }
        if(!mysqli_select_db($dbh,"phone_book")){
            mysqli_close($dbh);
        die ("Unable to connect to database" . mysqli_error());
        }
        
        $sql_stmt = "SELECT * FROM phonebook";
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
        }
        
        }
        
 mysqli_close($dbh); //close the database connection
} 
?>
</body> 
</html> 
