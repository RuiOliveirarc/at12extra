<?php
	$num=Rand(1,100);
	$num2=Rand(1,100);
	echo $num;
	echo '<br>';
	echo $num2;
	echo '<br>';

	$multiplo=e5($num,$num2);
	if($multiplo==True){
		echo 'Multiplos';
	}
	else{
		echo 'Não Multiplos';
	}



	function e5($num,$num2){
		if($num%$num2==0 || $num2%$num==0){
			return True;
		}
		else{
			return False;
		}
	}
?>