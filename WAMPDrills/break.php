<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Break</title>
	</head>
	<body>
	
	<?php 
	 for ($count=0; $count <= 10; $count++) {
		 if ($count == 5) {
			 continue; // here continue tells it to skip over 5
		 }
		echo $count . ", ";
	 }
	
	?>
	<br />
	<?php 
	 for ($count=0; $count <= 10; $count++) {
		 if ($count == 5) {
			 break; // here it ended execution completely
		 }
		echo $count . ", ";
	 }
	 ?>
	 <br />
	  <?php // loop inside a loop with a break
	 
	 
	  for ($i=0; $i<=5; $i++) {
		  if ($i % 2 == 0) { continue(1); }
		  for ($k=0; $k<=5; $k++) {
			if ($k == 3) { break(2); } //for example change these numbers to see different situations
			echo $i . "-" . $k . "<br />";
		  }
	  }
		
	  ?>
	
	

	</body>
</html>	

