<?php
function generatePIN($digits = 4){
	$i = 0; //counter
	$pin = ""; //our default pin is blank.
	while($i < $digits){
	//generate a random number between 0 and 9.
		$pin .= mt_rand(0, 9);
		$i++;
	}
	return $pin;
}

/*$string = 'philips';
$num = 500;
for ($i=0; $i < $num; $i++) { 
	$digits = generatePIN(4);
	$cupon = $string.$digits;
	echo $cupon.'<br>';
}*/

?>