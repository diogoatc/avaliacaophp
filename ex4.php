
<?php

if(isset($_POST['envia'])){    //verifica se o bot�o envia foi acionado para liberar a fun��o

$limite=$_POST['limite'];
$vetor = array(0);
$cont=0;  //contador para o array
for ($i = 0; $i < 1000000; $i++) {  //coloquei 1000000 para ter certeza que todos os valores entrar�o no Array
	if(count($vetor)<$limite){   //verifica se o array j� tem a quantidade limite informada
		
	
	$num=rand(0,$limite);   //randomiza os valores
	if(array_key_exists($num,$vetor)){     //verifica se o valor informado j� est� no array
		echo "O valor $num j� foi sorteado<br/>";    // se o valor informado j� est�, ele informa ao usuario
		
	}else{
		$vetor[$cont]=$num;   //sen�o, guarda o valor na variavel na posi��o cont
		$cont++;   //incrementa o array
	
	}
	}else{
		break;   //caso o vetor chegue ao limite dado pelo usuario (todos os numeros foram sorteados) ele para.
	}
}

echo count($vetor);   // teste para verificar se o array est� com o valor correto
}
?>
<form action="" name="envia" method="post">


Limite: <input type="text" name="limite">
		<input type="submit" name="envia" value="Enviar">

</form>


