<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Functions: Default Argument Values</title>
	</head>
	<body>
	
	<?php 

	 function paint($room="office",$color="red") { //these are default values
		 return "The color of the {$room} is {$color}.<br />";
	 }
	
	echo paint(); //default behavior
	echo paint("bedroom", "blue"); //custom behavior
	echo paint("bedroom", null); 	
	echo paint("bedroom"); //still picked up the value 	
	echo paint("blue"); 	
	?>
	</body>
</html>	

