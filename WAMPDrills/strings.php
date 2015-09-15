<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Strings</title>
	</head>
<body>
<?php	

	echo "Hello Blah<br />";
	echo 'Hello Blah<br />';
	
	$greeting = "Hello";
	$target = "Blah";
	$phrase = $greeting . " " . $target;
	echo $phrase; 
		
	
?>

	<?php /*variabe replacement inside a string*/?>
	
	<br />
	<?php
	
	echo "$phrase Again<br />";
	echo '$phrase Again<br />';
	echo '{$phrase}Again<br />';

	?>

</body>
</html>
