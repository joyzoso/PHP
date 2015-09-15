 <HTML>
<?php
$value0 = "";
$value1 = "Banana";
$value2 = "Apple";
$value3 = "Orange";
$submittedValue;
?>
<form action"formProcessing.php" method="POST">

<select project="FruitList" id="FruitList">
<option value = <?php echo $value0; ?>><?php echo $value0; ?></option>
<option value = <?php echo $value1; ?>><?php echo $value1; ?></option>
<option value = <?php echo $value2; ?>><?php echo $value2; ?></option>
<option value = <?php echo $value3; ?>><?php echo $value3; ?></option>
<input type="submit" name="submit" id="submit" value="Submit" />
</form>
</HTML>

<?php
function filter($data) {
$data = trim(htmlentities(strip_tags($data)));
if (get_magic_quotes_gpc())
$data = stripslashes($data);
$data = mysql_real_escape_string($data);
return $data;
}
foreach($_POST as $key => $value) {
 $mydata[$key] = filter($value);
}
echo $mydata['FruitList'];
?>