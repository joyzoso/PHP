<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Associative Arrays</title>
	</head>
	<body>
	 
	
	
	<?php $assoc = array("first_name" => "Kevin", "last_name" => "Smith"); ?>	
	<?php // first name and kevin is a key-value pair//?>
	
	<?php echo $assoc["first_name"]; ?><br />
	<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
	
	<?php $assoc["first_name"] = "Larry"; ?><br />
	<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
	
	<?php //echo $assoc[0]; this example does not work ?><br />
	
	
	
	</body>
</html>
