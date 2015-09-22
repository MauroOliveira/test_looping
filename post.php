<?php

$camp1 = $_POST['camp1'];
$camp2 = $_POST['camp2'];
$camp3 = $_POST['camp3'];
$camp4 = $_POST['camp4'];
$camp5 = $_POST['camp5'];
$camp6 = $_POST['camp6'];
$camp7 = $_POST['camp7'];
$camp8 = $_POST['camp8'];
$camp9 = $_POST['camp9'];

//parte A
if (($camp1 == 'x') && ($camp2 == 'x') && ($camp3 == 'x')) {
	echo "X ganhou";
}

if (($camp1 == 'o') && ($camp2 == 'o') && ($camp3 == 'o')) {
	echo " O ganhou";
}

//parte B
if (($camp4 == 'x') && ($camp5 == 'x') && ($camp6 == 'x')) {
	echo "X ganhou";
}

if (($camp4 == 'o') && ($camp5 == 'o') && ($camp6 == 'o')) {
	echo " O ganhou";
}

//parte C
if (($camp7 == 'x') && ($camp8 == 'x') && ($camp9 == 'x')) {
	echo "X ganhou";
}

if (($camp7 == 'o') && ($camp8 == 'o') && ($camp9 == 'o')) {
	echo " O ganhou";
}

//parte D
if (($camp1 == 'x') && ($camp4 == 'x') && ($camp7 == 'x')) {
	echo "X ganhou";
}

if (($camp1 == 'o') && ($camp4 == 'o') && ($camp7 == 'o')) {
	echo " O ganhou";
}

//parte E
if (($camp2 == 'x') && ($camp5 == 'x') && ($camp8 == 'x')) {
	echo "X ganhou";
}

if (($camp2 == 'o') && ($camp5 == 'o') && ($camp8 == 'o')) {
	echo " O ganhou";
}

//parte F
if (($camp3 == 'x') && ($camp6 == 'x') && ($camp9 == 'x')) {
	echo "X ganhou";
}

if (($camp3 == 'o') && ($camp6 == 'o') && ($camp9 == 'o')) {
	echo " O ganhou";
}

//parte H
if (($camp3 == 'x') && ($camp5 == 'x') && ($camp7 == 'x')) {
	echo "X ganhou";
}

if (($camp3 == 'o') && ($camp5 == 'o') && ($camp7 == 'o')) {
	echo " O ganhou";
}

//parte G
if (($camp1 == 'x') && ($camp5 == 'x') && ($camp9 == 'x')) {
	echo "X ganhou";
}

if (($camp1 == 'o') && ($camp5 == 'o') && ($camp9 == 'o')) {
	echo " O ganhou";
}

//if ($camp1 and $camp2 and $camp3 = "o") {
	//echo "Voce Ganhou";
//} else {
	//echo "Voce Perdeu";
//}


?>