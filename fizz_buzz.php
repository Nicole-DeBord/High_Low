<?php

// exercise 3.3.1. #2

for ($num = 1; $num <= 100; $num++) {

	if ($num % 3 == 0 && $num % 5 == 0) {

		echo "FizzBuzz" . PHP_EOL;
	}

	elseif ($num % 3 == 0) {

		echo "Fizz" . PHP_EOL;

	}

	elseif ($num % 5 == 0) {

		echo "Buzz" . PHP_EOL;
	}

	else {

	echo $num . PHP_EOL;

	}

}

?>