<?php

$num = rand(1, 100);

$quip = ['Nice try.', 'Not quite.', 'Try not to hurt yourself...', 
'Most amusing.', 'Are you even paying attention?',
 'Come onnnn... think.', 'Congrats, you win - PSYCH.', 
 'Maybe you\'re not cut out for this.', 
 'Wrong, but your dedication is impressive.'];

do {

fwrite(STDOUT, 'What number am I thinking of? ') . PHP_EOL;

$guess = trim(fgets(STDIN));

$index = rand(0, 8);
 	
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

?>