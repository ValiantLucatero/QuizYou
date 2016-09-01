<?php
session_unset();
session_destroy();
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Checkout</title>
			<link rel="stylesheet" href="../Styles/estilo.css"/>
		</head>
		<body>
			<h1>Cierre de sesi&oacute;n exitoso, gracias por jugar :D</h1>
			<a href="/QuizYou/Templates/homepage.php">Volver a la P&aacute;gina de Inicio</a>
		</body>
	</html>';
?>