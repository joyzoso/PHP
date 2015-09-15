<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Loops: while</title>
	</head>
	<body>
	
	<?php 
	 $count = 0;
	 while ($count <=10) {
		 if ($count ==5){
			echo "FIVE, "; 
		 } else {
		   echo $count . ","; 
		 }
		 $count++; // increment by 1
		 
	  }
	  echo "<br />";
	  echo "Count: {$count}";
	 ?>
	 
	 <br />
	 
	 <?php
	 
	  $count = 4;
	  while ($count <=10) {
		 if ($count % 2 == 0){
			 // or could I just do $count == 2, 4, etc or is there an even statement?
			echo "EVEN, "; 
		 } else {
		   echo "ODD " . ","; 
		 }
		 $count ++; // tells how many remains if dividing by 2
		 
	  }
	  echo "<br />";
	  echo "Count: {$count}";
	  ?>
	
	
	
	
	
	
	
	
	
	
	</body>
</html>
