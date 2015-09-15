<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Functions: Multiple Values</title>
	</head>
	<body>
	
	<?php 

	 //function add_subt($val1, $val2) {
		// $add = $val1 + $val2;
		 //$subt = $val1 - $val2;
		 //return $add;        //but how can we return $subt too?//functions only allow us to return one thing, so 
		 //array to the rescue, see below
	 //}
	 
	 //$result = add_subt(10,5);
	 //echo $result;
	
	?>
	<br />
	<?php 

	 function add_subt($val1, $val2) {
		 $add = $val1 + $val2;
		 $subt = $val1 - $val2;
		 return array($add, $subt);
	 }
	 
	 $result_array = add_subt(10,5);
	 echo "Add: " . $result_array[0] . "<br />";
	 echo "Subt: " . $result_array[1] . "<br />";
	 
	 // similar way below, but with adding list
	 
	 list($add_result, $subt_result) = add_subt(20,7);
	 echo "Add: " . $add_result . "<br />";
	 echo "Subt: " . $subt_result . "<br />";
	
	
	?>
	</body>
</html>	

