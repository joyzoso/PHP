<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Debugging</title>
	</head>
	<body>
	
	<?php 
	 $number = 99;
	 $string = "Bug?";
	 $array = array(1 => "Homepage", 2 => "About Us", 3 => "Services"); //assoc array
	
	
	var_dump($number);
	var_dump($string);
	var_dump($array);
	
	?>
	<br />
	<pre>
	<?php 
	//print_r(get_defined_vars());
	?>
	</pre>
	<br />
	<?php 
	
	 var_dump(debug_backtrace());
	 
	 ?>
	 <br />
	 
	 <?php
	 
	  function say_hello_to($word) {
		  echo "Hello {$word}!<br />";
		   var_dump(debug_backtrace());
	  }
	  
	  say_hello_to('Everyone');
	  
	 ?>
	 
	 
	 
	
	</body>
</html>	

