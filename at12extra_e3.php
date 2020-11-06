<?php
	$num=Rand(1,100);

	echo $num;
	echo '<br>';
	$graus=e3($num);

		echo $graus;


	function e3($num){
		$grauc=5*($num-32)/9;
		return $grauc;
	}
?>