<?php
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Halo</title>
			<link rel="stylesheet" href="../../Styles/estilo.css"/>
		</head>
		<body>
			<form method="POST" action="/QuizYou/Templates/aftermatch.php">
				Pregunta 1: Qu&eacute; craneo disminuye la cantidad de munici&oacute;n de las armas recogidas?<br/>
				<input type="radio" name="preg1" value="1"/>Hambre
			     	<input type="radio" name="preg1" value="0"/>Niebla
				<input type="radio" name="preg1" value="0"/>Ojo Morado
				<input type="radio" name="preg1" value="0"/>Mala Suerte<br/><br/>

				Pregunta 2: Como llamaban los Forerunners a la Tierra?<br/>
				<input type="radio" name="preg2" value="1"/>Erde-Tyrene
				<input type="radio" name="preg2" value="0"/>Edom
				<input type="radio" name="preg2" value="0"/>Janjur Qom
				<input type="radio" name="preg2" value="0"/>Charum Hakkor<br/><br/>

				Pregunta 3: Quien lider&oacute; la invasi&oacute;n a Reach y persigui&oacute; al Pillar of Autumn a Alpha Halo?<br/>
				<input type="radio" name="preg3" value="0"/>Jul Mdama
				<input type="radio" name="preg3" value="0"/>Rtas Vadum
				<input type="radio" name="preg3" value="0"/>Ripa Moramee
				<input type="radio" name="preg3" value="1"/>Thel Vadamee<br/><br/>

				Pregunta 4: Qu&eacute; tipo de juego solo est&aacute; disponible en Halo Reach?<br/>
				<input type="radio" name="preg4" value="0"/>Infecci&oacute;n
				<input type="radio" name="preg4" value="0"/>Juggernaut
				<input type="radio" name="preg4" value="1"/>Invasi&oacute;n
				<input type="radio" name="preg4" value="0"/>Flood<br/><br/>

				Pregunta 5: Qu&eacute; Instalaci&oacute;n NO ha aparecido en los juegos?<br/>
				<input type="radio" name="preg5" value="0"/>Instalaci&oacute;n 04
				<input type="radio" name="preg5" value="0"/>Instalaci&oacute;n 05
				<input type="radio" name="preg5" value="1"/>Instalaci&oacute;n 07
				<input type="radio" name="preg5" value="0"/>Instalaci&oacute;n 03<br/><br/>

				Pregunta 6: De acuerdo a Cortana, qu&eacute; tiene el Jefe Maestro que otros Spartan no tienen?<br/>
				<input type="radio" name="preg6" value="0"/>Valent&iacute;
				<input type="radio" name="preg6" value="0"/>Compasi&oacute;n
				<input type="radio" name="preg6" value="0"/>Inteligencia
				<input type="radio" name="preg6" value="1"/>Suerte<br/><br/>

				Pregunta 7: En que juego no se observan Elites vivos?<br/>
				<input type="radio" name="preg7" value="1"/>Halo 3:ODST
				<input type="radio" name="preg7" value="0"/>Halo Wars
				<input type="radio" name="preg7" value="0"/>Halo 3
				<input type="radio" name="preg7" value="0"/>Halo 2<br/><br/>

				<input type="submit" value="Revisar"/>
			</form>
		</body>
	</html>'; 
?>