<?php 
//1. Create a database connection 
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "student";
 $dbname = "widget_corp";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 //Test if connection occured.
 if(mysqli_connect_errno()) {
	 die("Database connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")"
	);	
 }
 ?>
 <?php
	//Often these are form values in $_POST
	$id = 6;
	
	
	//2. Perform database query
	$query  = "DELETE FROM subjects ";
	$query .= "WHERE id = {$id} ";
	$query .= "LIMIT 1";

	$result = mysqli_query($connection, $query);
	
	if ($result && mysql_affected_rows($connection) == 1) {
		//Success
		//redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Failure
		// $message = "Subject delete failed";
	  die("Database query failed. " . 
	  mysqli_error($connection));
	}
?>
 



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Databases_Delete</title>
	</head>
<body>


</body>
</html>

<?php 
//5. Close database connection
 mysqli_close($connection);
 ?>