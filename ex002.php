<?php 
	$num = 10;

	if ($num % 10 == 0) {
		print("$num é divisivel por 10, 5 e 2");
	} elseif ($num % 5 == 0) {
		print("$num é divisivel por 5");
	} elseif ($num % 2 == 0) {
		print("$num é divisivel por 2");
	} else {
		print("$num não é divisivel por 10, 5 ou 2");
	}
 ?>