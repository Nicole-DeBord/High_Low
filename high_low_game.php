<?php

// exercises 3.2.1. and 3.2.2.

$num = mt_rand($argv[1], $argv[2]);

$quip = ['Nice try.', 'Not quite.', 'Try not to hurt yourself...', 
'Most amusing.', 'Are you even paying attention?',
'Come onnnn... think.', 'Congrats, you win - PSYCH.', 
'Maybe you\'re not cut out for this.', 
'Wrong, but your dedication is impressive.'];

do {

$iteration = 0;

	do {

// Challenge from Jill - find a way to automatically adjust the max
// index key value if keys are added or removed

		$index = mt_rand(0, 8);

		if ($iteration == 0) {

			fwrite(STDOUT, "I'm thinking of a number between {$argv[1]} and {$argv[2]}. Try to guess it! ") . PHP_EOL;
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

			fwrite(STDOUT, "Play again? ") . PHP_EOL;

			$play = trim(fgets(STDIN));			

			}

		} while ($guess != $num);

} while ($play == 'yes');



// Cool ideas - enter #guesses count, and start script over again
 // if 'yes' entered at end of game

	?>