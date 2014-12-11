<?php

$iteration = 0;

$quip = ['Nice try.', 'Not quite.', 'Try not to hurt yourself...', 
'Most amusing.', 'Are you even paying attention?',
'Come onnnn... think.', 'Congrats, you win - PSYCH.', 
'Maybe you\'re not cut out for this.', 
'Wrong, but your dedication is impressive.'];


do {

	if ($argc != 3) {

		echo "Please enter two numbers." . PHP_EOL;

	} else {

		$low = min($argv);
		$high = max($argv[1], $argv[2]);
		$num = mt_rand($low, $high);

		do {


	// Challenge from Jill - find a way to automatically adjust the max
	// index key value if keys are added or removed


			$index = mt_rand(0, 8);

			if ($iteration == 0) {

				fwrite(STDOUT, "I'm thinking of a number between $low and $high. Try to guess it! ") . PHP_EOL;
				$iteration++;	
			}

			$guess = trim(fgets(STDIN));


			if ($guess > $num) {

				echo "{$quip[$index]} LOWER!" . PHP_EOL;
			} 
			
			elseif ($guess < $num) {


				echo "{$quip[$index]} HIGHER!" . PHP_EOL;

			} 

			elseif ($guess == $num) {

				echo "Good guess, you win!" . PHP_EOL;	

			}

		} while ($guess != $num);
	}

	fwrite(STDOUT, "Play again? ") . PHP_EOL;

	$play = trim(fgets(STDIN));

	$iteration = 0;

} while ($play == 'yes');
?>