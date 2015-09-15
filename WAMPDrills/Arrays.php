<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Arrays</title>
	</head>
	<body>
	 
	
	
	<?php  
	
	
	$numbers = array(4, 8, 15, 16, 23, 42);
	echo $numbers[1];
	//() means what you want in the array and [] refers to the index to retrieve//
	//arrays are indexed starting in 0, so index[1] = (8)//
	
	?>
	<br />
	<?php $mixed = array(6, "fox", "dog", array("x","y", "z")); ?>
	<?php echo $mixed[2]; ?><br /> 
	<?php echo $mixed[3]; ?><br /> 
	<?php echo $mixed ; ?><br /> 
	
	
	<?php echo $mixed[3][1]; ?><br /> 
	
	<?php // now we are going to assign values inside an array instead of creating a new one//?>
	
	<?php $mixed[2] = "cat"; ?>
	<?php $mixed[4] = "mouse"; ?>
	<?php $mixed[] = "house"; ?>
	
	<pre>
	<?php echo print_r($mixed); ?>
	</pre>
	
	
	<?php
		//PHP 5.4 added the short array syntax which is the square brackets//
		$array = [1,2,3];
	?>	
	
	
	
	
	
	</body>
</html>
