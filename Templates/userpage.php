<?php
session_name("Usuario");
session_start();
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Userpage</title>
			<link rel="stylesheet" href="../Styles/estilo.css"/>
		</head>
		<body>
			<h1>Bienvenid@ '.$_SESSION['u'].'</h1><br/>
			En que tema te sientes <strong>fuerte</strong>?<br/>
			<ul>
				<li><a href="/QuizYou/Cuestionarios/AC/cuestionario1.php">Assassins Creed</a></li>
				<li><a href="/QuizYou/Cuestionarios/Fisica/cuestionario1.php">F&iacute;sica</a></li>
				<li><a href="/QuizYou/Cuestionarios/Halo/cuestionario1.php">Halo</a></li>
				<li><a href="/QuizYou/Cuestionarios/Historia/cuestionario1.php">Historia de M&eacute;xico</a></li>
				<li><a href="/QuizYou/Cuestionarios/Programacion/cuestionario1.php">Programaci&oacute;n</a></li>
			</ul>
			<a href="/QuizYou/Templates/checkout.php">Cerrar Sesi&oacute;n</a>
		</body>
	</html>';
?>