<?php


$mes= $_POST['mes'];



switch ( $mes ){

  case 1:

    echo "<h1>O mês selecionado é: Janeiro";
    break;

  case 2:

    
    echo "<h1>O mês selecionado é: Fevereiro";
    break;

  case 3:

    
    echo "<h1>O mês selecionado é: Março";
    break;

  case 4:

    
    echo "<h1>O mês selecionado é: Abril";
    break;

  case 5:

    
    echo "<h1>O mês selecionado é: Maio";
    break;
  case 6:

    
    echo "<h1>O mês selecionado é: Junho";
    break;

   case 7:

    
    echo "<h1>O mês selecionado é: Julho";
    break;

    case 8:

    
    echo "<h1>O mês selecionado é: Agosto";
    break;

    case 9:

    
    echo "<h1>O mês selecionado é: Setembro";
    break;

    case 10:

    
    echo "<h1>O mês selecionado é: Outubro";
    break;

    case 11:

    
    echo "<h1>O mês selecionado é: Novembro";
    break;

    case 12:

    
    echo "<h1>O mês selecionado é: Dezembro";

    break;

  default:

    
    echo "<h1>Informe um valor valido entre 1 e 12";
    
}


?>

