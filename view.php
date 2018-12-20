<?php
	include("med/consulta.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php titulo()?></title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<link rel="StyleSheet" type="text/css" href="med/style.css" media="screen"/>
	<link href="med/bootstrap.min.css" rel=stylesheet>
	<script src="med/jquery.min1.10.2.js"></script>
	<link rel="icon" type="image/png" href="med/icon.png" />
	<script type="text/javascript">
	$('#hola').html("Ocultar Comentarios");
	function visible(){
		var valor = $('#hola').text();
		if(valor == "Ocultar Comentarios"){
			$('#hola').html("Ver Comentarios");
			document.getElementById('ms').style.width = '0%';
			$('#min').css("width", "100%");
			$('.vid').css("width", "80%");
		}else{
			$('#hola').html("Ocultar Comentarios");
			document.getElementById('ms').style.width = '40%';
			$('#min').css("width", "60%");
			$('.vid').css("width", "100%");
		}
	}
	var textarea = document.querySelector('textarea');

	textarea.addEventListener('keydown', autosize);
             
	function autosize(){
	  var el = this;
	  setTimeout(function(){
	    el.style.cssText = 'height:auto; padding:0';
	    el.style.cssText = 'height:' + el.scrollHeight + 'px';
	  },0);
	}
	</script>
</head>
<body>
<a href="index.php"><button style="top: 90%; left: 35%; position: absolute;" class="btn btn-warning">Volver al inicio</button></a>
	<section id="min">

		<div><?php description();?></div>

	</section>
	<div style="float: left;"></div><button id="hola" class="btn btn-primary" onclick="visible()">Ocultar Comentarios</button>
	<div id="ms" class="mensajes">
		<div class="encabezado1">Comentarios</div>
		<div class="content">
		<div style="padding: 10px;">
		<?php
		mensaje();
		?>
		</div>
		</div>
		<div class="coment" id="coment">
		<div style="padding: 10px">
			<form method="post" enctype="multipart/form-data" action=<?php echo "\"med/mensaje.php?v=".$val=$_GET['v']."\"";?>> 
			<img id="user" src="med/med.png">
			<input type="text" name="Usuario" placeholder="Escribe tu Usuario" style="width: 93%; height: 32px;" required />
			<textarea name="Mensaje" style="width: 100%; height: 50px; margin: 5px auto; resize: none; padding: 5px" placeholder="Mensaje..." required /></textarea> 
			<input type="submit" class="btn btn-primary" style="width: 100%;" value="Enviar">
		</form>
		</div>
		</div>
	</div>
</body>
</html>