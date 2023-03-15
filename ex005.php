<?php 
	$alturaP1 = 18.0;
	$idadeP1 = 15;
	$sexoP1 = "F";

	$alturaP2 = 19.0;
	$idadeP2 = 16;
	$sexoP2 = "F";

	$alturaP3 = 20.0;
	$idadeP3 = 17;
	$sexoP3 = "F";

	if ($alturaP1 >= $alturaP2 && $alturaP1 >= $alturaP3) {
		printf("A maior altura: %.2f", $alturaP1);
	} elseif ($alturaP2 >= $alturaP1 && $alturaP2 >= $alturaP3) {
		printf("A maior altura: %.2f", $alturaP2);
	} else {
		printf("A maior altura: %.2f", $alturaP3);
	}

	print("<br/>");

	if ($alturaP1 <= $alturaP2 && $alturaP1 <= $alturaP3) {
		printf("A menor altura: %.2f", $alturaP1);
	} elseif ($alturaP2 <= $alturaP1 && $alturaP2 <= $alturaP3) {
		printf("A menor altura: %.2f", $alturaP2);
	} else {
		printf("A menor altura: %.2f", $alturaP3);
	}

	print("<br/>");

	$mediaF = $alturaP1 + $alturaP2 + $alturaP3 / 3;
	printf("A média da altura é: %.2f", $mediaF);

	print("<br/>");

	$idadeP4 = 42;
	$sexoP4 = "M";

	$idadeP5 = 44;
	$sexoP5 = "M";

	$idadeP6 = 50;
	$sexoP6 = "M";

	if($idadeP4 >= $idadeP5 && $idadeP4 >= $idadeP6){
		print("Maior idade homem: $idadeP4");

	}elseif($idadeP5 >= $idadeP4 && $idadeP5 >= $idadeP6){
		print("Maior idade homem: $idadeP5");

	} else{
		print("Maior idade homem: $idadeP6");

	}
	print("<br/>");
	if($idadeP1 <= $idadeP2 && $idadeP1 <= $idadeP3){
		print("Menor idade mulher: $idadeP1");

	}elseif($idadeP2 <= $idadeP1 && $idadeP2 <= $idadeP3){
		print("Menor idade mulher: $idadeP2");

	} else{
		print("Menor idade mulher: $idadeP3");

	}



 ?> 