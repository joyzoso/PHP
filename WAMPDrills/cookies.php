<?php

// REMEMBER: Setting cookies must be before *any* HTML output
//unless output buffering is turned on.

 $name = "test";
 $value = "Hello";
 $expire = time() + (60*60*24*7); // add seconds
 //setcookie($name, $value, $expire);
 
 //setcookie($name);
 //setcookie($name, null, $expire);
 //setcookie($name, $value, time() - 3600);
 
 // Dude's recommendation for unsetting;
 //setcookie($name, null, time () - 3600);

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
	</head>
<body>



<?php// to condense all of the above into one line....
 $test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";
 echo $test;
// test, if it is set, here is the value, if it is not set, here is the other value
?>




</body>
</html>
