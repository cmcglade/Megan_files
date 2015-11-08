<!doctype html>
<html>
<head>
	<title>PHP Test Page</title>
</head>
<body>
	<h1>PHP info</h1>

<!--This is the php echo command. Can put break inside quotes or between lines of php-->
<?php echo "Hello, this is Hal speaking.<br>"; ?>
<!--<br/>-->
<!-- can use echo as testing function to check your code-->
<?php //this is how you format a comment within a php tag
echo "Hello" . "class"; ?>

<!--more structured/common version of writing these-->
	<?php echo "Demonstration of echo<br>" ;
		echo "and" ."concatenation" ;
		
	//creating PHP variables: equals sign does not mean equivalent, means assigning a value
	?>
	
	
	<?php $greeting = "Hello<br>";
	echo $greeting;
	//concatenation is done with a period, not a + sign
	$beginning = "This" ;
	$middle = "is";
	$end = "magic";
	//a space is a string, has to be in quotes or php won't know what it is. Whitespace doesn't matter
	$sentence = $beginning . " " . $middle . " " . $end;
	echo $sentence
	
	?>
	
	
		<?php $greeting = "Hello";
			$username = "Salima";
			$welcome = $greeting . " " . $username;
			echo $welcome;
		
			//understand that php has to come from the server, not the browser
			$exit = "Goodbye";
			$leaving_site = $exit . " " . $username;
			echo $leaving_site
		?>	
	
	<?php
	//variable replacement
	echo "$beginning is $end";
	?>

		<?php
		//How to enter quotations in php
		$explanation = " We're learning \"scary\" code today!";
		echo $explanation;
		//can use single quotes, but industry standard is to use backslash
		?>
<br/>
	<!--string functions. all very handy for forms-->
	<?php
	//switch last name from upper case entry to lower case. Opposite = 'strtoupper'
		$lastname = "PALMATEER";
		echo strtolower($lastname);
		
		$postalcode = "m5r 3h8";
		echo strtoupper($postalcode);
		
	//first letter uppercase
		$firstname = "megan";
		echo ucfirst($firstname);
		
	//first letter of each word uppercase
		$wholename = "megan palmateer";
		echo ucwords($wholename);
		?>
		
	<?php	
	//remove whitespace ??
		echo trim($postalcode, " ");
	?>

		<?php
		$sentence = "There is a tweet on this page.";
		//find a certain word in a form - find a string in a string ??
		echo strstr($sentence,"tweet",);
		?>
		
		<?php
		//do a string replace ?? look up on w3schools
		echo str_replace("username");
		?>
		

</body>
</html>

