
<form action="" method="post" name="envia">

   	<label> <h1>Informe a data de nascimento <br/></h1> 
		No formato: ddmmaaaa <input type="text" name="data" placeholder="EX: 04021993">
		<input type="submit" name="envia" value="ENVIAR">
	</label>
</form>
<?php

if(isset($_POST['envia'])){
	
	$data= $_POST['data'];
	if(strlen($data)==8){
	$valores= array();
	
	for ($i = 0; $i < strlen($data); $i++) {
		$valores[$i]= substr($data, $i,1);
		
	}
	
	$mes="$valores[2]"."$valores[3]";
	



switch ( $mes ){

case 01:

echo "O mês do seu nascimento é: Janeiro";
break;

case 02:


echo "O mês do seu nascimento é: Fevereiro";
break;

case 03:


echo "O mês do seu nascimento é:: Março";
break;

case 04:


echo "O mês do seu nascimento é: Abril";
break;

case 05:


echo "O mês do seu nascimento é: Maio";
break;
case 06:


echo "O mês do seu nascimento é: Junho";
break;

case 07:


echo "O mês do seu nascimento é: Julho";
break;

case 08:


echo "O mês do seu nascimento é: Agosto";
break;

case 09:


echo "O mês do seu nascimento é: Setembro";
break;

case 10:


echo "O mês do seu nascimento é: Outubro";
break;

case 11:


echo "O mês do seu nascimento é: Novembro";
break;

case 12:


echo "O mês do seu nascimento é: Dezembro";

break;

default:


echo "<h1>Data de nascimento no formato incorreto ou com mês inválido";

}





}else{
	echo"<h1>Informe a data de nascimento no formato ddmmaaaa";
}
	
}
	
	
	?>