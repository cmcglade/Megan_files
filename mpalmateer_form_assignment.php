<!DOCTYPE html>
<html lang=en>
<head>
	<title>Form Assignment</title>
	<meta name="PHP" content="Assignment 5 - PHP Form">  
</head>
<body>
	<!--Form fields -->
	<form method='POST'>
	
		<h2>Please input the following:</h2>
		<label>Name</label><br>
		<input type="text" name="first_name" value=""/>
	<br>
		<label>Last Name</label><br>
		<input type="text" name="last_name" value=""/>
	<br>
		<label>Mother's Maiden Name</label><br>
		<input type="text" name="maiden_name" value=""/>
	<br>
		<label>Postal Code</label><br>
		<input type="text" name="postal_code" value=""/>
	<br>
		<label>Favourite Colour</label><br>
		<input type="text" name="fave_color" value=""/>
	<br>
		<input type="submit" name="submit" value="submit"/>
	<br>
	<!--Form functions-->
	<?php
		$first= ucfirst($_POST["first_name"]);
		$last= ucfirst($_POST["last_name"]);
		$maiden= ucfirst($_POST["maiden_name"]);
		$postcode= strtoupper($_POST["postal_code"]);
		$favecolor= strtolower($_POST["fave_color"]);
	//Paragraph to appear on screen after user presses Submit button
		if ($_POST["submit"] == true){
			echo "<p>Hi $first! I find it interesting to think about how our identity might change if we had our mother's name.
			If your name wasn't $first $last, but instead $first $maiden, would your favourite colour still be $favecolor?
			Would you still live in $postcode? </p>";
		}
	?>
	</form>
</body>
</html>
