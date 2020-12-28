<!-- Q.9) Write a PHP program named states.php that declares a variable "states" with value "Mississippi Alabama Texas Massachusetts Kansas". Write a PHP program that does the 
following:
	a) Search for a word in variable states that ends in 'xas'. Store this word as element 0 of a list named statesList.
	b) Search for a word in states that begins with k and ends with s. Perform a case-insensitive comparison. [Note: Passing re.i as a second parameter to method compile 
	performs a case-insensitive comparison.] Store this word as element 1 of statesList.
	c) Search for a word in states that begins with M and ends with s. Store this word as element 2 of the list.
	d) Search for a word in states that ends in a. Store this word as element 3 of the list. -->

<?php
	$states = "Mississippi Alabama Texas Massachusetts Kansas";
	$statesList = [];
	$states1 = explode(' ', $states);	//Break the string into an array
	
	echo "Original Array: <br>";
	foreach ($states1 as $i => $value) {
		print("STATES[$i] = $value <br>");
	}

	foreach ($states1 as $state) {
		if(preg_match('/xas$/', $state))
			$statesList[0] = $state;
	}

	foreach ($states1 as $state) {
		if(preg_match('/^k.*s$/i', $state))
			$statesList[1] = $state;
	}

	foreach($states1 as $state) {
		if(preg_match('/^M.*s$/', $state)) 
			$statesList[2] = $state;
	}

	foreach($states1 as $state) {
		if(preg_match('/a$/', $state)) 
			$statesList[3] = $state;
	}

	echo "<br><br> Resultant Array: <br>";
	foreach($statesList as $array => $value)
		print("STATES[$array] = $value <br>")

?>
