<?php
	$num=Rand(1,100);

	echo $num;
	echo '<br>';
	if (e2($num)==True) {
		echo 'Perfeito';
	}
	else{
		echo 'Não Perfeito';
	}
	function e2($num){
		$soma=0;
		for ($i=1;$i<$num; $i++) { 
			if ($num%$i==0) {
				$soma=$soma+$i;
			}
		}
		if ($soma==$num) {
			return True;
		}
		else{
			return False;
		}
	}
?>