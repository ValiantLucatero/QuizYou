<?php
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Assassins Creed</title>
			<link rel="stylesheet" href="../../Styles/estilo.css"/>
		</head>
		<body>
			<form method="POST" action="/QuizYou/Templates/aftermatch.php">
				Pregunta 1: Cual es la primer gran ciudad que Connor visita?<br/>
				<input type="radio" name="preg1" value="0"/>Londres
			     	<input type="radio" name="preg1" value="0"/>Nueva York
				<input type="radio" name="preg1" value="0"/>San Francisco
				<input type="radio" name="preg1" value="1"/>Boston<br/><br/>

				Pregunta 2: Quien es la primer persona que conoce Haytham al llegar a Am&eacute;rica?<br/>
				<input type="radio" name="preg2" value="0"/>Edward Kenway
				<input type="radio" name="preg2" value="1"/>Charles Lee
				<input type="radio" name="preg2" value="0"/>Simon
				<input type="radio" name="preg2" value="0"/>Benjamin Church<br/><br/>

				Pregunta 3: Qu&eacute; arma nueva adquiere Ezio al llegar a Estambul?<br/>
				<input type="radio" name="preg3" value="1"/>Hoja Gancho
				<input type="radio" name="preg3" value="0"/>Hoja Pivote
				<input type="radio" name="preg3" value="0"/>Hoja Oculta
				<input type="radio" name="preg3" value="0"/>Arma Oculta<br/><br/>

				Pregunta 4: Donde se encuentra la antigua fortaleza de los Asesinos?<br/>
				<input type="radio" name="preg4" value="1"/>Masyaf
				<input type="radio" name="preg4" value="0"/>Egipto
				<input type="radio" name="preg4" value="0"/>Nueva York
				<input type="radio" name="preg4" value="0"/>Roma<br/><br/>

				Pregunta 5: Que fragmento del Ed&eacute;n aparece en AC:II?<br/>
				<input type="radio" name="preg5" value="0"/>El Ankh
				<input type="radio" name="preg5" value="0"/>El B&aacute;culo
				<input type="radio" name="preg5" value="0"/>La Espada
				<input type="radio" name="preg5" value="1"/>La manzana<br/><br/>

				Pregunta 6: De quien son las memorias que revive Desmond en AC?<br/>
				<input type="radio" name="preg6" value="0"/>Ratonhnhak&eacute;:ton
				<input type="radio" name="preg6" value="0"/>Ezio Auditore da Firenze
				<input type="radio" name="preg6" value="1"/>Altair Ibn-La Ahad
				<input type="radio" name="preg6" value="0"/>Connor Kenway<br/><br/>

				Pregunta 7: Cual era el trabajo de Desmond antes de su secuestro?<br/>
				<input type="radio" name="preg7" value="0"/>Granjero
				<input type="radio" name="preg7" value="0"/>Mesero
				<input type="radio" name="preg7" value="1"/>Bartender
				<input type="radio" name="preg7" value="0"/>Cajero<br/><br/>

				<input type="submit" value="Revisar"/>
			</form>
		</body>
	</html>'; 
?>