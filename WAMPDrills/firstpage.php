<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>First Page</title>
	</head>
	<body>
	
	<?php
	// *<a href="secondpage.php">Second Page</a> //note no php * //
	 ?>
	 
	<?php // now we do the same thing but with php
	?>
	
	<?php $link_name = "Second Page"; ?>
	<?php $id = 5; ?>
	<?php $company = "Johnson & Johnson"; ?>
	
	<a href="secondpage.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name; ?></a>
	<? php // important to use echo with urlencode ?>
	</body>
</html>	

