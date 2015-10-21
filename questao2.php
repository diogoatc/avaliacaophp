<?php

// Aluno: Diogo Lopes da Costa

function escreve(){
	$valor=0;
	
	while ($valor != 44){
	echo $valor."<br/>";
	$valor = rand(1,50);
	if($valor==44){
		echo 44;
	}
}
		
	}

escreve();




?>