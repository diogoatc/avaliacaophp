
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

echo "O m�s do seu nascimento �: Janeiro";
break;

case 02:


echo "O m�s do seu nascimento �: Fevereiro";
break;

case 03:


echo "O m�s do seu nascimento �:: Mar�o";
break;

case 04:


echo "O m�s do seu nascimento �: Abril";
break;

case 05:


echo "O m�s do seu nascimento �: Maio";
break;
case 06:


echo "O m�s do seu nascimento �: Junho";
break;

case 07:


echo "O m�s do seu nascimento �: Julho";
break;

case 08:


echo "O m�s do seu nascimento �: Agosto";
break;

case 09:


echo "O m�s do seu nascimento �: Setembro";
break;

case 10:


echo "O m�s do seu nascimento �: Outubro";
break;

case 11:


echo "O m�s do seu nascimento �: Novembro";
break;

case 12:


echo "O m�s do seu nascimento �: Dezembro";

break;

default:


echo "<h1>Data de nascimento no formato incorreto ou com m�s inv�lido";

}





}else{
	echo"<h1>Informe a data de nascimento no formato ddmmaaaa";
}
	
}
	
	
	?>