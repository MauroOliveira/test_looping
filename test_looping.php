<?php

//html post variable
//$looping = $_POST['looping'];
//clear simple counter
//$i = 0;

$looping = 3;

while ($looping >= 0) {
	//account quantity looping set
	//$looping = $looping + 1;
	//simple counter
	//$i = $i + 1; 
	//echo $i . '<h5>numero errado</h5>';

	if ($looping >= 2) {
		echo "a";
		$looping = $looping - 1;
		echo "-";
	}


	if ($looping >= 1) {
		echo "b c";
		$looping = $looping - 1;
		echo "-";
	}


	if ($looping >= 0) {
		echo "d";
		$looping = $looping -1;
	}
	
}

//echo '<h5>numero certo</h5>'

?>;