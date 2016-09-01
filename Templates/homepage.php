<?php
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>QuizYou</title>
			<link rel="stylesheet" href="../Styles/estilo.css"/>
		</head>
		<body>
			<h1>QuizYou</h1>
			<form action="checkup.php" method="POST">
				<input type="text" name="usr" size="10" maxlength="45" placeholder="Usuario"/><br/>
				<input type="password" name="ctr" size="10" maxlength="45"/><br/>
				<input type="submit" value="Ingresar"/><br/><br/>
				No tienes cuenta? <a href="registro.php">Reg&iacute;strate</a>
			</form>
		</body>
	</html>';
?>