<?php

// exercise 3.3.1. #1 - this mostly does what it's supposed to, still needs
// an error message, but it functions - see comments below

$start = null;
$end = null;
$inc = null;

// var_dump(is_numeric($start));

do {

	if (!is_numeric($start)) {
		// Ask user for input to set variables
		fwrite(STDOUT, 'Enter a starting number ');	
		$start = trim(fgets(STDIN));	
	}

	// else {
	// 	echo "Please enter a numeric value.\n";
	// }

	if (!is_numeric($end)) {
		fwrite(STDOUT, 'Enter an ending number ') . PHP_EOL;
		$end = trim(fgets(STDIN));
	}

	if (!is_numeric($inc)) {
		fwrite(STDOUT, 'Enter an incrementation value ');
		$inc = trim(fgets(STDIN));

		// Check for an incrementer
		if ($inc == '') {
			$inc = 1;
		}
	}

} while (!is_numeric($start) || !is_numeric($end) || !is_numeric($inc));



// var_dump($inc);



// Check to see if those variables are numeric
if (is_numeric($start) && is_numeric($end) && is_numeric($inc)) {
	
	// Output our numbers using the variables set above.	
	for ($i=$start; $i <= $end; $i += $inc) { 
		echo $i . PHP_EOL;
	}

}

// else {

// 	echo "Please enter numeric values.\n";

// }

?>
