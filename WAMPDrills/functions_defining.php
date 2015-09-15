<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Functions: Defining</title>
	</head>
	<body>
	
	<?php 

	
	 function say_hello() {
		 echo "Hello PHP World<br />";
	 }
	 
	 say_hello(); //that to the left indicates we are calling the function we made above
	 
	 
	 function say_hello_to($word) {
		 echo "Hello {$word}<br />";
	 }
	 
	 say_hello_to("Me");
	 say_hello_to("Everyone");
	  
	  
	 say_hello_loudly(); //notice that we defined it (below) after we called it (to the left)
	  
	  
	 function say_hello_loudly() {
		 echo "HELLO PHP WORLD!<br />";
	 }
	 
	//function say_hello_loudly() {
		// echo "We can't redefine a function<br />";
	 //}
	 
	?>
	 
	 
	
	

	</body>
</html>	

