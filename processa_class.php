<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Formulário</title>
</head>
<body style="background-color:lightgreen;color:black">
<?php 
	$a=$_GET['a'];
	$b=$_GET['b'];
	$c=$_GET['c'];
	$d=$_GET['d'];

	if($a==127){
		echo "Endereço reservado a loopback ou localhost";
		echo "<br>";
		echo "IP Reservado e Invalido";
	}
	elseif($a>=1 && $a<=126 && $b<=255 && $c<=255 && $d<=254){
		echo "Classe A";
	}
	elseif($a>=128 && $a<=191 && $b<=255 && $c<=255 && $d<=254){
		echo "Classe B";
	}
	elseif($a>=192 && $a<=223 && $b<=255 && $c<=255 && $d<=254){
		echo "Classe C";
	}
	elseif($a>=224 && $a<=239 && $b<=255 && $c<=255 && $d<=254){
		echo "Classe D";
	}
	elseif($a>=240 && $a<=254 && $b<=255 && $c<=255 && $d<=254){
		echo "Classe E";
	}
	else{
		echo "Erro! Indique um IP publico entre 0.0.0.0 e 255.255.255.255";
	}
	

	ECHO"<br><br>";
	echo"<a href='formulario.php'><button> Voltar </button> </a>";

?>