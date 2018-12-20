<?php
function borrar_mensajes(){
if($_GET["d"]=="true"){
	$host="localhost";
	$user="root";
	$contra="password";
	$db="trabajosconalep";
	$table="mensajes";
	$id_video=$_POST['id_video'];

	if($conexion=mysqli_connect($host,$user,$contra,$db)){
		if($borrar=mysqli_query($conexion, "delete from mensajes where id_video = ".$id_video.";")){
?>
	<script type="text/javascript">
		document.write("<center><br><br><h1 style='color: #ff0000;'>Todos los mensajes se han borrado excitosamente</h1></center>");
		setTimeout(function(){
			document.write("<?php header("Location: opcciones.php")?>");	
		}, 1000);
	</script>
<?php
		}else{
		echo "No se pudo :P";
	}
}
}
}

function borrar_videos(){
	if($_GET["v"]=="true"){
	$host="localhost";
	$user="root";
	$contra="password";
	$db="trabajosconalep";
	$table="mensajes";
	$id_video=$_POST['id_video'];
	if($conexion=mysqli_connect($host,$user,$contra,$db)){
	$borrar=mysqli_query($conexion, "delete from videos where id = ".$id_video.";");
}else{
	echo "no pudo conectar DB :P";
}
}
}
	
function agregar(){
	$host="localhost";
	$user="root";
	$contra="password";
	$db="trabajosconalep";
	$table="mensajes";
	$table="videos";
	$i = 0;
	if($conexion=mysqli_connect($host,$user,$contra,$db)){
		$peticion= mysqli_query($conexion, "SELECT * FROM videos");
		while($campo=mysqli_fetch_array($peticion)){
			$i++;
		}
	}

$i=$i+1;
$name = $_POST["name"];
$descripcion = $_POST["descipcion"];
$link = $_POST["link"];
$tipo = $_POST["OS"];

if(mysqli_query($conexion, "INSERT INTO videos VALUES('".$i."', '".$name."', '".$descripcion."', '".$link."', '".$tipo."')")){
	echo "OK";
	header("Location: ../index.php");
}else{
	echo "no se pudo insertar el datos por la resepcion de datos";
}
}

if($name = $_POST["name"]){
	agregar();
}

function conexion(){
	$name="root";
	$host="localhost";
	$ps="password";
	$db="trabajosconalep";

	if($conexion=mysqli_connect($host,$name,$ps,$db)){

	//HTML
	?>
	<h3>Videos de HTML y Paginas Web</h3><br>
	<?php
		$peticion=mysqli_query($conexion, "SELECT * FROM videos WHERE(tipo='HTML')");
		?>
			<div class="magic">
		<?php
		while($campo=mysqli_fetch_array($peticion)){
			?>

			<div id="video"><a href=<?php echo "\"view.php?v=".$campo['id']."\"";?>><img src="med/video0.png" title=<?php echo "\"".$campo['nombre']."\"";?>></a><font size="3px"><?php echo "<br><br>".$campo['nombre']?></font></div>

			<?php
		}
		?>
			</div>
		<?php

	//CMD
	?>
	<br><h3>CMD / Bat / Programas por lotes</h3><br>
	<?php
		$peticion=mysqli_query($conexion, "SELECT * FROM videos WHERE(tipo='CMD')");
		?>
			<div class="magic">
		<?php
		while($campo=mysqli_fetch_array($peticion)){
			?>

			<div id="video"><a href=<?php echo "\"view.php?v=".$campo['id']."\"";?>><img src="med/video0.png" title=<?php echo "\"".$campo['nombre']."\"";?>></a><font size="3px"><?php echo "<br><br>".$campo['nombre']?></font></div>

			<?php
		}
			?>
			</div>
			<?php

	//C++
	?>
	<br><h3>Programación basica con C++</h3><br>
	<?php
		$peticion=mysqli_query($conexion, "SELECT * FROM videos WHERE(tipo='C')");
	?>
			<div class="magic">
	<?php
		while($campo=mysqli_fetch_array($peticion)){
			?>

			<div id="video"><a href=<?php echo "\"view.php?v=".$campo['id']."\"";?>><img src="med/video0.png" title=<?php echo "\"".$campo['nombre']."\"";?>></a><font size="3%"><?php echo "<br><br>".$campo['nombre']?></font></div>

			<?php
		}
		?>
		</div>
		<?php
	//ASSIN
	?>
	<br><h3>Sistemas Operativos</h3><br>
	<?php
		$peticion=mysqli_query($conexion, "SELECT * FROM videos WHERE(tipo='ASSIN')");
		?>
			<div class="magic">
		<?php
		while($campo=mysqli_fetch_array($peticion)){
			?>

			<div id="video"><a href=<?php echo "\"view.php?v=".$campo['id']."\"";?>><img src="med/video0.png" title=<?php echo "\"".$campo['nombre']."\"";?>></a><font size="3px"><?php echo "<br><br>".$campo['nombre']?></font></div>

			<?php
		}
		?>
			</div>
		<?php
	//EXCEL
	?>
	<br><h3>Documentos digitales (Excel)</h3><br>
	<?php
		$peticion=mysqli_query($conexion, "SELECT * FROM videos WHERE(tipo='EXCEL')");
		?>
			<div class="magic">
		<?php
		while($campo=mysqli_fetch_array($peticion)){
			?>

			<div id="video"><a href=<?php echo "\"view.php?v=".$campo['id']."\"";?>><img src="med/video0.png" title=<?php echo "\"".$campo['nombre']."\"";?>></a><font size="3px"><?php echo "<br><br>".$campo['nombre']?></font></div>

			<?php
		}
		?>
			</div>
		<?php
	}
}

function description(){
	$name="root";
	$host="localhost";
	$ps="password";
	$db="trabajosconalep";
	$val=$_GET['v'];

	$conexion=mysqli_connect($host,$name,$ps,$db);
	$peticion=mysqli_query($conexion, 'SELECT * FROM videos WHERE(id = '.$val.')');
	
	while ($campo=mysqli_fetch_array($peticion)) {
		$id = $campo['id'];
		$nombre = $campo['nombre'];
		$descripcion = $campo['descripcion'];
		$link = $campo['link'];
	}
if($id > 0){
//acortar link
	$link = substr($link, 17);
	?>
		<div class="vid">
		<iframe id="youtube" src=<?php echo "\"https://www.youtube.com/embed/".$link."\"" ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<div class="encabezado" style="width: 100%;" id="view"><h3><?php echo $nombre;?></h3></div>
	<?php
}else{
	echo "<script> alert('Lo sentimos... Video No Disponible o no Encontrado :-('); window.location.href='index.php'</script>";
}
}

function titulo(){
	$name="root";
	$host="localhost";
	$ps="password";
	$db="trabajosconalep";
	$val=$_GET['v'];

	$conexion=mysqli_connect($host,$name,$ps,$db);
	$peticion=mysqli_query($conexion, 'SELECT * FROM videos WHERE(id = '.$val.')');

	while ($campo=mysqli_fetch_array($peticion)) {
		$nombre=$campo['nombre'];
	echo $nombre;
}
}

function mensaje(){
	$name="root";
	$host="localhost";
	$ps="password";
	$db="trabajosconalep";
	$val=$_GET['v'];

	$conexion=mysqli_connect($host,$name,$ps,$db);
	$peticion=mysqli_query($conexion, 'SELECT * FROM mensajes WHERE(id_video = '.$val.')');

	while ($campo=mysqli_fetch_array($peticion)) {
		$user=$campo['user'];
		$mensaje=$campo['mensaje'];
	?>
		<div class="caja">
			<img id="user" src="med/med.png"> <?php echo $user; ?> dice:
			<br>
			<div style="margin-left: 35px; border-left: 1px rgba(0,0,0,0) solid; border-right: 1px rgba(0,0,0,0) solid; border-bottom: 1px rgba(0,0,0,0) solid; border-top: 1px #777 solid; border-style: dashed;">
			<textarea rows='2' style="width: 100%; padding: 0px 0px 0px 0px; margin: 5px auto; border: none; background: rgba(0,0,0,0); resize: none;" disabled><?php echo $mensaje;?></textarea>
			</div>
		</div>
	<?php
}
}
?>