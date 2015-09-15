<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Functions: Scope</title>
	</head>
	<body>
	
	<?php 

	 $bar = "outside"; //global scope
	 
	 function foo() {
		 global $bar;
		 if (isset($bar)) { //if it set then let's echo it inside the function
			 echo "foo: " . $bar . "<br />";
		 } 
		 $bar = "inside"; //local scope
	 }
	 
	 echo "1: " . $bar . "<br />";
	 foo();
	 echo "2: " . $bar . "<br />";
	 
	 
	?>
	</body>
</html>	

