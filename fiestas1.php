<!DOCTYPE html>
<html lang="es">
<head>
	<title>FIESTAS POPULARES</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="logo"><a href="index1.html"><img src="images/logo1.jpg"></a></li>
				<li id="cl"><a href="insertar-fiestas.php">INSERTAR</a></li>
				<li id="cl"><a href="eliminar-fiestas.php">ELIMINAR</a></li>
				<li id="cl"><a href="actualizar-fiestas.php">ACTUALIZAR</a></li>
			</ul>
		</nav>
		<?php
	include("conect.php");
	$sql_listar="select * from fiestas";
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table cellspacing=60 align=center bgcolor='#98AFC7' border=8>";
	echo "<br><br><br>";
	echo "<tr>";
		echo "<td>NOMBRE</td>";
		echo "<td>FECHA DE CELEBRACION</td>";
		echo "<td>DESCIPCION</td>";
	echo "</tr>";
	echo "FIESTAS POPULARES DEL ECUADOR";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['fecha']."</td>";
			echo "<td>".$row['descripcion']."</td>";
	}
	echo "</table>";
	?>
	</header>
	<footer id="pinferior">
		<div class="infor">
			Contactos: 2568546
		</div>
		<div class="derechos">
			Todos los derechos reservados 2015
		</div>
		<div class="logos">
			<img src="images/logo_ecuador.jpg">
			<img src="images/logoAllYouNeed.png">
		</div>
	</footer>	
</body>
</html>