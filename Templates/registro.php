<?php
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Registro</title>
			<link rel="stylesheet" href="../Styles/estilo.css"/>
		</head>
		<body>
			<form action="checkup.php" method="POST">
				<input type="text" name="usr" size="10" maxlength="45" placeholder="Usuario"/><br/>
				7 caracteres alfanumericos<br/>
				Password:<input type="password" name="ctr" size="10" maxlength="45"/><br/>
				Confirma password:<input type="password" name="ctr1" size="10" maxlength="45"/><br/>
				10 caracteres con al menos un n&uacute;mero y un caracter especial<br/>
				<input type="submit" value="Enviar"/>
				<input type="reset" value="Borrar"/>
			</form>
			<small>Si presionas Enviar estas de acuerdo con nuestros T&eacute;rminos y Condiciones, seamos sinceros, nadie los lee.</small>
		</body>
	</html>';
?>