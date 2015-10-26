
<?php

		//Autor: Diogo Lopes


if(isset($_POST['envia'])){    //verifica se o botão envia foi acionado para liberar a função

$limite=$_POST['limite'];
$vetor = array();
$cont=0;  //contador para o array

for ($i = 0; $i < 1000000; $i++) {  //coloquei 1000000 para ter certeza que todos os valores entrarão no Array
	if(count($vetor)<$limite){   //verifica se o array já tem a quantidade limite informada
		$num=rand(0,$limite);   //randomiza os valores
		
			if(in_array($num, $vetor)){     //verifica se o valor informado já está no array
				echo "O valor $num já foi sorteado<br/>";    // se o valor informado já está, ele informa ao usuario
			}else{
	
				echo "O numero sorteado é: $num"."<br/>";
				$vetor[$cont]=$num;   //senão, guarda o valor na variavel na posição cont
				$cont++;   //incrementa o array
		
			}	
	}else{
		break;   //caso o vetor chegue ao limite dado pelo usuario (todos os numeros foram sorteados) ele para.
		}	
}
echo "<h4>Foram sorteados: ".count($vetor)." numeros";   // teste para verificar se o array está com o valor correto
}





?>
<form action="" name="envia" method="post">


Limite: <input type="text" name="limite">
		<input type="submit" name="envia" value="Enviar">

</form>


