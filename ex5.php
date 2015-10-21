<?php
$vetor1 = array();
$vetor2 = array();

for ($i = 0; $i < 10; $i++) {
	
	$aleatorio1 = rand(0,10);
	$aleatorio2 = rand(0,10);
	
	$vetor1[$i]= $aleatorio1;
	$vetor2[$i]= $aleatorio2;
	
}
echo "<h1> Valores do vetor 1:</h1> <br/>";

foreach ($vetor1 as $valor1){
	echo $valor1."<br/>";
}

echo "<h1> Valores do vetor 2 :</h1> <br/>";
	
foreach ($vetor2 as $valor2){
	echo $valor2."<br/>";
}

?>