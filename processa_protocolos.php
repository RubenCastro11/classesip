<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Formulário</title>
</head>
<body style="background-color:lightgreen;color:black">
<?php 

	$tipoprotocolo=$_GET['tipoprotocolo'];

	if($tipoprotocolo=="dns"){
		echo "<h2 style='text-align:center;'> DNS [Domain Name System]</h2>";
		echo"<h3>É o protocolo utilizado para associar a cada endereço IP um nome, pois desta forma é mais fácilde ser memorizado pelos utilizadores. Por exemplo, www.portoeditora.pt, poderá,corresponder ao endereço IP 192.16831.32.</h3>";
	}
	elseif($tipoprotocolo=="ftp"){
		echo "<h2 style='text-align:center;'> FTP [File Transfer Protocol]</h2>";
		echo"<h3>É o protocolo utilizado para a transferência de ficheiros. Serve para fazermos o download ou upload de ficheiros de ou para servidores FTP, aquele cujo endereço começa por ftp://.</h3>";
	}
	elseif($tipoprotocolo=="http"){
		echo "<h2 style='text-align:center;'> HTTP [HyperText Transfer Protocol]</h2>";
		echo"<h3>É o protocolo utilizado para controlar a comunicação entre o servidor de Internet e o browser, ou seja, serve de suporte à World Wide Web. É o que nos permite escrever na Barra de Endereços do nosso browser um endereço URL [Uniform Resource Locator] e rapidamente receber a página Web correspondente.</h3>";
	}
	else{
		echo "<h2 style='text-align:center;'> IP [Internet Protocol]</h2>";
		echo"<h3>É o protocolo responsável por estabelecer a ligação entre os computadores emissor e recetor para que a informação não se perca na rede.</h3>";
	}

	echo"<a href='formulario.php'> <button> Voltar </button> </a>";
?>