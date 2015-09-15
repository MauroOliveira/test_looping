<?php

$looping = $_POST['looping'];
$i = 0;

while ($looping <= 87) {
	$looping = $looping + 1;
	$i = $i + 1; 
	echo $i . '<h5>numero errado</h5>';
}

echo '<h5>numero certo</h5>'

?>