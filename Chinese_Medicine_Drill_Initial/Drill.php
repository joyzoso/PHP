<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Drill</title>
	</head>
<body>
	<h1> Diagnose yourself with Chinese Medicine! </h1>
	<h2> By looking at your tongue and choosing how you currently feel, you can self diagnose yourself and see if you have 
	Liver Qi Stagnation, Yin Deficiency, or Spleen Qi Deficiency </h2>
	
	
 <form action="drill.php" method="POST">
 <select name="symptoms">
  <option value="Liver Qi Stagnation">Purple Tongue and Depressed, Angry or Irritable</option>
  <option value="Spleen Qi Deficiency">Scalloped Tongue and Anxious, Worried and Fatigued</option>
  <option value="Yin Deficiency">Cracked and Dry Tongue and Tired, Fearful with Night Sweats</option>
 
</select>
<p />
	 <input type="submit" value="Submit" />
	</form>
	 
	<?php 
	require_once("included_functions.php");
	
	$formsymptoms = "string";
	//echo $formsymptoms;
	

	
	//$formsymptoms = $_POST["symptoms"];
	

 
	if (isset($_POST['symptoms'])) 
	{
		
		
	$formsymptoms = $_POST['symptoms'];
	}
	//echo $formsymptoms;
	
	if ($formsymptoms == "Liver Qi Stagnation") 
	{	echo "redirecting to LiverQi";
		redirect_to("LiverQi.html");
	} 
	
	if  ($formsymptoms == "Spleen Qi Deficiency") 
		
	{
		redirect_to("SpleenQi.html"); 
	}
			
	if ($formsymptoms == "Yin Deficiency") 
		
	{	
		redirect_to("YinXu.html");
	}
	
	?>

</body>
</html>
