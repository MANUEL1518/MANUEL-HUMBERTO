<html>
<head>
	<title>Agregar</title>
	<style type="text/css">
		body, html{
			height: 100%;
			padding: 0;
			margin: 0;
			font-family: Arial;
			color: #fff;
			overflow: hidden;
			background: url(escritorio.jpg);
		}
		form{
			//position: absolute;
			margin: 7% auto;
			margin-left: 23%;
			width: 50%;
			padding: 0px 15px 15px 15px;
			border: 1px #fff solid;
		}
		h3{
			border-bottom: 1px #fff solid;
			padding: 0px 0px 5px 0px;
			color: #fff;
		}
		#contenido{
			margin: 0px auto;
			transition: 0.5s;
			width: 0%;
			height: 0%;
			background: rgba(0,0,0,0.4);
			overflow: hidden;
			visibility: hidden;
			color: #fff;
		}
		#mensajes{
			width: 100%;
			height: 100%;
			background: #000;
			overflow: hidden;
			visibility: hidden;
		}
		input, #zero{
			font-size: 13px;
			width: 100%;
			padding: 10px;
			background: rgba(0,0,0,0);
			border-collapse: collapse;
			border: 1px #fff solid;
			color: #fff;
			margin: 5px auto;
		}

		input::-webkit-input-placeholder { color: #fff; } 
		input:-moz-placeholder { /* Firefox 18- */ color: #fff; } 
		input::-moz-placeholder { /* Firefox 19+ */ color: #fff; } 
		input:-ms-input-placeholder { color: #fff; }

		input:focus{
			box-shadow: 0 0 2px #fff;
			border: 1px #fff solid;
			outline: none;
		}

		input[type="submit"], #zero{
			font-size: 13px;
			text-align: center;
			width: 48%;
			background: #2020ee;
			color: #fff;
			border-radius: 5px;
			border: none;
			box-shadow: 0 3px 0 #000099;
			margin: 0;
		}
		#zero{
			font-size: 13px;
			text-align: center;
			background: #ee2020;
			box-shadow: 0 3px 0 #990000;
			float: left;
		}
		select{
			padding: 10px;
			background: rgba(0,0,0,0);
			color: #fff;
			border: 1px #fff solid;
		}
		option{
			color: #000;
		}
		#videos{
			padding: 10px;
		}
		#cont{
			transition: 0.5s;
			padding: 5% 15%;
		}
	</style>
	<script src="jquery.min1.10.2.js"></script>

	<?php include("consulta.php"); borrar_mensajes(); borrar_videos();?>
	
	<script type="text/javascript">
		$("#selec").focus();
		function videos(){
			
			$('#cont').css("display", "none"); 
				$('#contenido').css("visibility", "visible");
				$('#contenido').css("width", "100%");
				$('#contenido').css("height", "100%");
		}
		function cancelar(){
			$('#contenido').css("visibility", "hidden");
			$('#contenido').css("width", "0%");
			$('#contenido').css("height", "0%");

			//espera 1 segundo
			setTimeout(function(){
			$('#cont').css("display", "block");
			}, 480);
		}
	</script>
	<link href="med/bootstrap.min.css" rel=stylesheet>
</head>
<body>
<div id="cont">
<h2 style="text-align: center; border-bottom: 2px #fff solid; padding: 0px 0px 10px 0px">Trabajos Conalep</h2>
<button id="videos" onclick="videos()" style="position: absolute; width: 70%;" class="btn btn-primary">Agregar nuevo video</button><br>
<form method="post" action="opcciones.php?d=true" style="padding: 10px; margin: 40px auto; border: 1px #fff solid; color: #fff;">
	<h3>Mensajes</h3>
	<input type="text" name="id_video" required placeholder="Escribe la id del video" style="width: 100%; padding: 10px; color: #fff;">
	<input type="submit" name="borrar" value="Borrar Mensajes" style="width: 100%;">
</form>

<form method="post" action="opcciones.php?v=true" style="padding: 10px; margin: 40px auto; border: 1px #aa0000 solid; color: #fff;">
	<h3 style="color: #aa0000; border-bottom: 1px #aa0000 solid;">Borrar Video</h3>
	<input type="text" name="id_video" required placeholder="Escribe la id del video" style="border: 1px #aa0000 solid; width: 100%; padding: 10px; color: #fff;">
	<input type="submit" name="borrar" value="Borrar Mensajes" style="width: 100%; background: #aa0000; box-shadow: 0 3px 0 #550000;">
</form>
</div>

<div id="contenido">
<form method="post" name="formulario" action="opcciones.php">
	<h3>Agregar video</h3>
	Nombre: <br><input type="text" name="name" id="selec" required><br><br>

	Descripcion: <br><input type="text" name="descipcion" required><br><br>

	Link: <br><input type="text" name="link" required><br><br>

	Tipo: <select name="OS">
			<option value="HTML">HTML</option>
			<option value="CMD">CMD</option>
			<option value="C">C++</option>
			<option value="ASSIN">ASSIN</option>
			<option value="EXCEL">EXCEL</option>
		</select><br><br>
	<input type="submit" name="Enviar" value="Enviar"></input>
	<boton id="zero" onclick="cancelar()">Cacelar</boton>
</form>
</div>
</body>
</html>