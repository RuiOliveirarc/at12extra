<?php
	$num=Rand(1,100);

	echo $num;
	echo '<br>';

	$primo=e1($num);


	if($primo==True){
		echo 'Primo';
	}
	else{
		echo 'Não primo';
	}


	function e1($num){

		$primo=array();

		for ($i=2;$i<$num; $i++) { 

			if ($num%$i==0) {
				return False;
			}

			else{
				return True;
			}				
		}
	}
?>