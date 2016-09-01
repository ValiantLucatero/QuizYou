<?php
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Historia de M&eacute;xico</title>
			<link rel="stylesheet" href="../../Styles/estilo.css"/>
		</head>
		<body>
			<form method="POST" action="/QuizYou/Templates/aftermatch.php">
				Pregunta 1: La econom&iacute;a del M&eacute;xico post-independiente, atrajo a inversionistas extranjeros; de que p&iacute;ses eran principalmente?<br/>
				<input type="radio" name="preg1" value="1"/>Inglaterra, Francia y EUA
			     	<input type="radio" name="preg1" value="0"/>China, Jap&oacute;n y Egipto
				<input type="radio" name="preg1" value="0"/>Guatemala, Belice y Honduras
				<input type="radio" name="preg1" value="0"/>Inglaterra, Holanda e Italia<br/><br/>

				Pregunta 2: C&oacute;mo se le conoce a la batalla en la que el ej&eacute;rcito franc&eacute;s fue derrotado durante la segunda intervenci&oacute;n francesa?<br/>
				<input type="radio" name="preg2" value="0"/>Batalla de Chapultepec
				<input type="radio" name="preg2" value="0"/>Batalla del sahuaro
				<input type="radio" name="preg2" value="0"/>Batalla de Cuernavaca
				<input type="radio" name="preg2" value="1"/>Batalla de Puebla<br/><br/>

				Pregunta 3: Con qu&eacute; otro nombre se le conoce a la primera intervenci&oacute;n francesa?<br/>
				<input type="radio" name="preg3" value="0"/>Guerra franco-mexicana
				<input type="radio" name="preg3" value="0"/>Guerra de los cupcakes
				<input type="radio" name="preg3" value="0"/>Guerra de San Germ&aacute;n
				<input type="radio" name="preg3" value="1"/>Guerra de los pasteles<br/><br/>

				Pregunta 4: Cu&aacute;l era el nombre del ejercito que entr&oacute; triunfante a la ciudad de M&eacute;xico al concluir la guerra de independencia?<br/>
				<input type="radio" name="preg4" value="1"/>Ej&eacute;rcito trigarante
				<input type="radio" name="preg4" value="0"/>EZLN
				<input type="radio" name="preg4" value="0"/>Batall&oacute;n activo de San Blas
				<input type="radio" name="preg4" value="0"/>Ej&eacute;rcito tricolor<br/><br/>

				Pregunta 5: De qu&eacute; imperio fue capital Monte Alb&aacute;n?<br/>
				<input type="radio" name="preg5" value="1"/>Zapoteca
				<input type="radio" name="preg5" value="0"/>Azteca
				<input type="radio" name="preg5" value="0"/>Inca
				<input type="radio" name="preg5" value="0"/>Maya<br/><br/>

				Pregunta 6: Por qu&eacute; Jos&eacute; Ma. Morelos siempre tra&iacute;a amarrado un paliacate a la cabeza?<br/>
				<input type="radio" name="preg6" value="0"/>Porque estaba herido
				<input type="radio" name="preg6" value="0"/>Porque estaba calvo
				<input type="radio" name="preg6" value="0"/>Porque era la moda
				<input type="radio" name="preg6" value="1"/>Porque padec&iacute;a migra&ntilde;a<br/><br/>

				Pregunta 7: C&oacute;mo se le conoce a las mujeres que de una u otra manera participaron apoyando a la Revoluci&oacute;n Mexicana?<br/>
				<input type="radio" name="preg7" value="0"/>Revolucionarias
				<input type="radio" name="preg7" value="1"/>Adelitas
				<input type="radio" name="preg7" value="0"/>Entronas
				<input type="radio" name="preg7" value="0"/>Chaparreras<br/><br/>

				<input type="submit" value="Revisar"/>
			</form>
		</body>
	</html>'; 
?>