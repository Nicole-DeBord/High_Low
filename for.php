<?php

// Create a file named for.php in your exercises repo. 

//Commit and push all changes after each step.

// Prompt user for a starting number and ending number, then 
// display all the numbers from the starting to ending using a 
// for loop.

fwrite(STDOUT, 'Enter a starting number ');
$start = trim(fgets(STDIN));

fwrite(STDOUT, 'Enter an ending number ');
$end = trim(fgets(STDIN));

// Refactor to allow user to choose increment. 
// (count by 1, 2, 10, ...)

fwrite(STDOUT, 'Enter an incrementation value ');
$inc = trim(fgets(STDIN));

for ($i=$start; $i <= $end; $i += $inc) { 
	
	echo $i . PHP_EOL;
}
// Default increment to 1 if no input.
// Make sure you are only allowing users to pass in numbers. 
// Give an error message is both passed arguments are not numeric. 
// See php.net/is_numeric.

?>