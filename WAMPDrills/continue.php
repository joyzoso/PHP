<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Continue</title>
	</head>
	<body>
	
	<?php //start with a basic forloop 
	 for ($count=0; $count <= 10; $count++) {
		 if ($count % 2 == 0) { continue; }
		 echo $count . ", ";
	 }
	?>
	<br />
	
	<?php // what's wrong with this while loop?
	//It is stuck in an infinite loop! note continue if $count = 5
	
	//$count = 0;
	//while ($count <= 10) {
		//if ($count == 5) {
		//	continue;
		//}
		//echo $count . ", ";
		//$count++;
	 //}
	?>
	
	<br />
	<?php // how do we fix the above infinite loop issue?
	$count = 0;
	while ($count <= 10) {
		if ($count == 5) {
			$count++; //we add this
			continue;
		}
		echo $count . ", ";
		$count++;
	}
	?>
	<br />
	<?php // loop inside a loop with continue
	
	 for ($i=0; $i<=5; $i++) {
		 if ($i % 2 == 0) { continue(1); }
		 for ($k=0; $k<=5; $k++) {
			 if ($k == 3) { continue(2); } //means this should continue not 1 loop back (like line 46) but 2 loops back
			 echo $i . "-" . $k . "<br />";
		 }
	 }
	
	?>
	</body>
</html>
