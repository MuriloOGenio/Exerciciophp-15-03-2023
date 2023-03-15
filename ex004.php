<?php 
	$num1 = 0;
	$num2 = 25;
	$num3 = 40;
	$texto = "";

	if ($num1 >= $num2 && $num1 >= $num3) {
		print("$num1-");
		if ($num2 >= $num3) {
			print("$num2-$num3");
		} else {
			print("$num3-$num2");
		}
	} elseif ($num2 >= $num1 && $num2 >= $num3) {
		print("$num2-");
		if ($num1 >= $num3) {
			print("$num1-$num3");
		} else {
			print("$num3-$num1");
		}
	} else {
		print("$num3-");
		if ($num1 >= $num2) {
			print("$num1-$num2");
		} else {
			print("$num2-$num1");
		}
	}



?>