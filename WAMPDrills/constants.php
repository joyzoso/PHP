<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Constants</title>
	</head>
	<body>
	
	<?php
	 $max_width = 980;
	 //this is a variable//
	 
	 define("MAX_WIDTH", 980);
	 echo MAX_WIDTH;
	 //this is a constant//

	?>
	<br />
	<?php // can't change the value
	//MAX_WIDTH += 1
	//echo MAX_WIDTH;
	?>
	
	<?php // can't even redefine it
	 define("MAX_WIDTH", 981);
	 echo MAX_WIDTH;
	?>
	
	
	</body>
</html>
