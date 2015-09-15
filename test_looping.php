<?php

//html post variable
$looping = $_POST['looping'];
//clear simple counter
$i = 0;

while ($looping <= 87) {
	//account quantity looping set
	$looping = $looping + 1;
	//simple counter
	$i = $i + 1; 
	echo $i . '<h5>numero errado</h5>';
}

echo '<h5>numero certo</h5>'

?>