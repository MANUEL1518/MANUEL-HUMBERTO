<?php
	$user = $_POST['Usuario'];
	$mensaje = $_POST['Mensaje'];
	$video = $_GET['v'];
	$name="root";
	$host="localhost";
	$ps="password";
	$db="trabajosconalep";

	echo $user;
	echo $mensaje;
	echo $video;

	$conexion=mysqli_connect($host,$name,$ps,$db);
	mysqli_query($conexion, "INSERT INTO mensajes VALUES('".$video."' , '".$user."' , '".$mensaje."')");

	header("Location: ../view.php?v=$video");
?>