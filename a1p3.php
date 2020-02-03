<!doctype html>
<!-- Navneet Kaur (1053) -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(empty($_POST['string']))
	{
		echo "Please enter the string";
	}
	else
	{
		$val = $_POST['string']; // taking the input value
		$rest = str_split ($val); //converting to array
		function dupl($rest)  
		{  
			return count($rest) != count(array_unique($rest));   // checking if it containes duplicate values 
		}  
        
        // Printing message depending on output
		if(dupl($rest) == 1)
		{
			echo "Your String contains duplicate values";
		}
		else
		{
			echo "Your String contains NO duplicate values";
		}
		
		
	}
}
?>
</head>
<body>

<form method="post">

	<p><label>Input String: </label><input type="text" name="string"></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>