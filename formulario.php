<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Formulário</title>
</head>
<body style="background-color:lightgreen;color:black">
	<h2 style='text-align:center;'> Classe IP </h2>
	<h3>Insira um IP para ser verificado</h3>
	<form action="processa_class.php">
		<input type="text" name="a">
		<input type="text" name="b">
		<input type="text" name="c">
		<input type="text" name="d"><br>
		<input type="submit" value="Confirmar">
	</form>
	<br>
	<h2>Protocolos</h2>
	<h3>Seleciona o protocolo</h3>
	<form action="processa_protocolos.php">
  		<select name="tipoprotocolo" id="cars">
		    <option value="dns">DNS</option>
		    <option value="ftp">FTP</option>
		    <option value="http">HTTP</option>
		    <option value="ip">IP</option>
  		</select>
  		<br>
  		<input type="submit" value="Confirmar">
	</form>
</body>
</html>