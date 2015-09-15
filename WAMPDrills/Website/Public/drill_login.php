<?php 

$servername =  "localhost";
$username =  "root";
$password =  "student";
$db =  "drill_login";

mysqli_connect($servername, $username, $password);

$conn = mysqli_connect($servername, $username, $password);


mysqli_select_db($conn, $db);

if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."' LIMIT 1";
$res = mysqli_query($conn, $sql);
$row = mysqli_num_rows($res);
if ($row == 0) {
	echo "Successful Login";
} else {
	 echo "You have no success, return to previous page";
 }
}

?>
<!DOCTYPE HTML> 
<html> 
<head> 
<title>Drill Login</title> 
</head> 

<body> 
<form method="POST" action="drill_login.php">
Username: <input type="text" name="username" /><br /><br />
Password: <input type="password" name="password" /><br />
<input type="submit" name="submit" value="Login"/>
</form>
</body> 
</html> 

