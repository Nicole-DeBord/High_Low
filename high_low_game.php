<?php

$num = rand(1, 100);
$quip = ['Not quite!', 'Try not to hurt yourself...', 'Are you even paying attention!?', 'Come onnnn... think!'];

do {

fwrite(STDOUT, 'What number am I thinking of? ') . PHP_EOL;

$guess = fgets(STDIN);

$index = rand(0, 3);
 	
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