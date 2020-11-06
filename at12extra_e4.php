<?php
	$altura=Rand(10,20)/10;
	$sexo=Rand(True,False);
	echo $altura;
	echo '<br>';
	if($sexo==True){
			echo 'MALE';
		}
		else{
			echo 'FEMALE';
		}
	echo '<br>';
	$peso=e4($altura,$sexo);
	echo $peso;

	function e4($altura,$sexo){
		if($sexo==True){
			$peso=72.7*$altura-58;
		}
		else{
			$peso=62.1*$altura-44.7;
		}
		return $peso;
	}
?>