<?php
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Programaci&oacute;n</title>
			<link rel="stylesheet" href="../../Styles/estilo.css"/>
		</head>
		<body>
			<form method="POST" action="/QuizYou/Templates/aftermatch.php">
				Pregunta 1: Es capaz de almacenar una direcci&oacute;n de memoria<br/>
				<input type="radio" name="preg1" value="0"/>Variable
			     	<input type="radio" name="preg1" value="0"/>Operador
				<input type="radio" name="preg1" value="0"/>Palabra reservada
				<input type="radio" name="preg1" value="1"/>Apuntador<br/><br/>

				Pregunta 2: Cu&aacute;l es el m&aacute;ximo valor de una variable de 32 bits sin signo?<br/>
				<input type="radio" name="preg2" value="0"/>2 ^31
				<input type="radio" name="preg2" value="0"/>2 ^32
				<input type="radio" name="preg2" value="0"/>2 ^31-1
				<input type="radio" name="preg2" value="1"/>2 ^32-1<br/><br/>

				Pregunta 3: PHP es un lenguaje de programaci&oacute;n que se ejecuta en el<br/>
				<input type="radio" name="preg3" value="0"/>Navegador
				<input type="radio" name="preg3" value="0"/>Cliente
				<input type="radio" name="preg3" value="1"/>Servidor
				<input type="radio" name="preg3" value="0"/>Monitor<br/><br/>

				Pregunta 4: Cuantos bits componen un byte?<br/>
				<input type="radio" name="preg4" value="0"/>5
				<input type="radio" name="preg4" value="0"/>9
				<input type="radio" name="preg4" value="1"/>8
				<input type="radio" name="preg4" value="0"/>Ninguno<br/><br/>

				Pregunta 5: Facilita a las personas el entendimiento de un algoritmo<br/>
				<input type="radio" name="preg5" value="1"/>Pseudoc&oacute;digo
				<input type="radio" name="preg5" value="0"/>Desarrollo del problema
				<input type="radio" name="preg5" value="0"/>Interfaz de usuario
				<input type="radio" name="preg5" value="0"/>Descripci&oacute;n narrada<br/><br/>

				Pregunta 6: Tipo de funci&oacute;n que no devuelve valor<br/>
				<input type="radio" name="preg6" value="0"/>public
				<input type="radio" name="preg6" value="0"/>static
				<input type="radio" name="preg6" value="1"/>void
				<input type="radio" name="preg6" value="0"/>constant<br/><br/>

				Pregunta 7: Primera operaci&oacute;n a realizar con un archivo<br/>
				<input type="radio" name="preg7" value="0"/>Escribir
				<input type="radio" name="preg7" value="0"/>Leer
				<input type="radio" name="preg7" value="0"/>Cerrar
				<input type="radio" name="preg7" value="1"/>Abrir<br/><br/>

				<input type="submit" value="Revisar"/>
			</form>
		</body>
	</html>'; 
?>