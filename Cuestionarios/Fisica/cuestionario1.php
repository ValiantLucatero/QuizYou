<?php
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>F&iacute;sica</title>
			<link rel="stylesheet" href="../../Styles/estilo.css"/>
		</head>
		<body>
			<form method="POST" action="/QuizYou/Templates/aftermatch.php">
				Pregunta 1: Qu&eacute; radiaci&oacute;n tiene la energ&iacute;a m&aacute;s alta?<br/>
				<input type="radio" name="preg1" value="0"/>Luz visible
			     	<input type="radio" name="preg1" value="0"/>Luz infrarroja
				<input type="radio" name="preg1" value="0"/>Radar
				<input type="radio" name="preg1" value="1"/>Rayos X<br/><br/>

				Pregunta 2: Qu&eacute; magnitud se mide en hercios o hertz?<br/>
				<input type="radio" name="preg2" value="0"/>Longitud de onda
				<input type="radio" name="preg2" value="1"/>Frecuencia
				<input type="radio" name="preg2" value="0"/>&Iacute;ndice de refracci&oacute;n
				<input type="radio" name="preg2" value="0"/>Campo magn&eacute;tico<br/><br/>

				Pregunta 3: Con qu&eacute; m&eacute;todo se puede determinar la distancia de objetos lejanos (como la Luna)?<br/>
				<input type="radio" name="preg3" value="1"/>Triangulaci&oacute;n
				<input type="radio" name="preg3" value="0"/>Triatl&oacute;n
				<input type="radio" name="preg3" value="0"/>Tri&aacute;ngulo
				<input type="radio" name="preg3" value="0"/>Tribunal<br/><br/>

				Pregunta 4: Cu&aacute;l es la aceleraci&oacute;n de la gravedad en la luna con respecto a la de la Tierra?<br/>
				<input type="radio" name="preg4" value="1"/>1/6
				<input type="radio" name="preg4" value="0"/>10
				<input type="radio" name="preg4" value="0"/>1
				<input type="radio" name="preg4" value="0"/>2<br/><br/>

				Pregunta 5: Qu&eacute; determina si algo flota en el agua o no?<br/>
				<input type="radio" name="preg5" value="0"/>Gravedad
				<input type="radio" name="preg5" value="0"/>Masa
				<input type="radio" name="preg5" value="0"/>Peso
				<input type="radio" name="preg5" value="1"/>Densidad<br/><br/>

				Pregunta 6: Qu&eacute; propiedad de un objeto es fundamental para la inercia?<br/>
				<input type="radio" name="preg6" value="0"/>Forma
				<input type="radio" name="preg6" value="0"/>Densidad
				<input type="radio" name="preg6" value="0"/>Volumen
				<input type="radio" name="preg6" value="1"/>Masa<br/><br/>

				Pregunta 7: Qu&eacute; ecuaci&oacute;n es la ecuaci&oacute;n fundamental de la mec&aacute;nica?<br/>
				<input type="radio" name="preg7" value="1"/>F=m*a
				<input type="radio" name="preg7" value="0"/>F=m*s
				<input type="radio" name="preg7" value="0"/>A=m*v
				<input type="radio" name="preg7" value="0"/>V=s*t<br/><br/>

				<input type="submit" value="Revisar"/>
			</form>
		</body>
	</html>'; 
?>