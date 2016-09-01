<?php
$p1=$_POST['preg1'];
$p2=$_POST['preg2'];
$p3=$_POST['preg3'];
$p4=$_POST['preg4'];
$p5=$_POST['preg5'];
$p6=$_POST['preg6'];
$p7=$_POST['preg7'];
$puntuacion=$p1+$p2+$p3+$p4+$p5+$p6+$p7;
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Aftermatch</title>
			<link rel="stylesheet" href="../Styles/estilo.css"/>
		</head>
		<body>
			<h1>Bien hecho! Tu puntuaci&oacute;n fue '.$puntuacion.' de 7</h1><br/>
			<a href="/QuizYou/Templates/userpage.php">Volver a la p&aacute;gina de inicio</a>
		</body>
	</html>';
?>