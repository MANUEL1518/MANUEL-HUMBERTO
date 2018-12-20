<?php
	include("med/consulta.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trabajos Conalep</title>
	<meta charset="UTF-8">
	<link rel="StyleSheet" type="text/css" href="med/style.css" media="screen"/>
	<link rel="icon" type="image/png" href="med/icon.png" />
	<link href="https://fonts.googleapis.com/css?family=Raleway|Fira+Sans|Karla" rel="stylesheet">
</head>
<body>
<div class="conprin">
	<header>
		<h3>Trabajos Conalep</h3>
	</header>
	<div class="contenedor">
		<div class="encabezado">
			<subt>Trabajos Conalep</subt>
		</div>
	<div class="inf">
	<div style="font-size: 20px; padding: 20px 20px 0px 20px;">Hice esto porque...</div>
	<p align="justify">
		Hola a todos, en estos dias muchos de la clase me han pedido una explicación personalizada de los temas que estamos tratando por eso ahora quiero presentarles mi hobra terminada.<br><br>
		El fin de esta pagina es poder subir los videos a esta plataforma para poder informar y documentar mas de estos temas. Utilizando explicaciones detalladas por medio de esta plataforma.
	</p>
	</div>
	<div class="inf" style="margin-top: 20px;">
	<center><div style="width: 70%; padding: 20px 0 10px 0; font-size: 20px; border-bottom: 1px #000 solid;">Temas a tratar</h2><br></center>
		<p id="tow">
			Podria decir que los temas a tratar en la clase son sencillos pero sin embargo no estoy tomando un importante punto en cuenta...<b>¿Que es lo que quieren saber?</b><br><br>
			Por eso dividi el desarrollo de estos videos en 4 cosas:
		</p>
		<center><img src="med/1.png"></center><br>
		<p id="tow">
			Debido a esto es que decidi crear unos videos tomando estos puntos en cuenta, asi que a continuacion solo me quedaria decir...
			<b>Disfruten de esto</b>
		</p>
		
	</div>
	<div class="curriculom">
		<div style="padding: 20px; font-size: 15px;">
			<center>
				<img src="med/foto.png"><br>
				<br><b>Creado Por:</b><br><br>Manuel Humberto Ponce Barbosa.<br><br>
				<b>Whatsapp:</b><br><br>3221504377
			</center>
		</div>
	</div>
</div>
</div>

<div style="height: 200px;"></div>

	<div class="query">
		<div style="padding: 30px; font-size: 20px; border-style: none; border-bottom: 1px #000 solid; width: 60%; margin: 0px auto;">
			<center>Bienvenido a lo que venimos</center>
			
		</div>
		<div class="videos">
			<div style="padding: 20px;">
				<div style="margin: 0 auto; width: 100%; text-align: center;">
					<?php conexion();?>
				</div>
			</div>
		</div>
	</div>

<footer class="pie">
	<p style="padding: 0 0 0 10%;">
		©Copyright - Manuel H. Ponce .- 2018
	</p>
</footer>
</body>
</html>