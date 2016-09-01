<?php
echo'<!DOCTYPE html>
	<html>
		<head>
			<title>Bienvenido</title>
			<link rel="stylesheet" href="../Styles/estilo.css"/>
		</head>
		<body>';
			if(isset($_POST['ctr1']))
			{
				$usuario=$_POST['usr'];
				$contra=$_POST['ctr'];
				$contra1=$_POST['ctr1'];
				$patron='/[` ~ ! @ # $ % ^ & * ( ) _ - = + ; : . > , <]/';
				$patron1='/\d/';
				$long=strlen($usuario);
				if($long>7)
					echo'<h1>Usuario no v&aacute;lido</h1>';
				else
				{
					$chec=preg_match($patron,$usuario);
					if($chec<>0)
						echo'<h1>Usuario no v&aacute;lido</h1>';
					else
						if($contra<>$contra1)
							echo'<h1>Password no v&aacute;lida</h1>';
						else
						{
							$long=strlen($contra);
							if($long>10)
								echo'<h1>Password no v&aacute;lida</h1>';
							else
							{
								$chec=preg_match($patron,$contra);
								if($chec==0)
									echo'<h1>Password no v&aacute;lida</h1>';
								else
								{
									$chec=preg_match($patron1,$contra);
									if($chec==0)
										echo'<h1>Password no v&aacute;lida</h1>';
									else
									{
										$arch=fopen("usuarios.dat","ab");
										fwrite($arch,$usuario);
										fwrite($arch,$contra);
										fclose($arch);
										session_name("Usuario");
										session_start();
										$_SESSION['u']=$usuario;
										echo'<h1>Inicio de sesi&oacute;n exitoso<br/><a href="/QuizYou/Templates/userpage.php">Ir a tu perfil</a><h1>';
									}
								}
							}
						}
				}		
			}
			else
			{
				$usuario=$_POST['usr'];
				$contra=$_POST['ctr'];
				$arch=fopen("usuarios.dat","rb");
				$i=filesize("usuarios.dat");
				$chec=fread($arch,$i);
				fclose($arch);
				$a=substr_count($chec,$usuario);
				$b=substr_count($chec,$contra);
				if($a==0)
					echo'<h1>Usuario incorrecto</h1>';
				elseif($b==0)
					echo'<h1>Password incorrecta</h1>';
				if($a<>0)
				{
					session_name("Usuario");
					session_start();
					$_SESSION['u']=$usuario;
					echo'<h1>Inicio de sesi&oacute;n exitoso<br/><a href="/QuizYou/Templates/userpage.php">Ir a tu perfil</a><h1>';
				}
			}	
echo'		</body>
	</html>';
?>