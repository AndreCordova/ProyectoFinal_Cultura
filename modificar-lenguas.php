<!DOCTYPE html>
<html lang="es">
<head>
	<title>MODIFICAR LENGUAS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="logo"><a href="index1.html"><img src="images/logo1.jpg"></a></li>
				<li id="cl"><a href="lenguas1.php">LENGUAS</a></li>
				<li id="cl"><a href="fiestas1.php">FIESTAS POPULARES</a></li>
				<li id="cl"><a href="gastronomia1.php">GASTRONOMIA</a></li>
				<li id="cl"><a href="tradiciones1.php">TRADICIONES</a></li>
				<li id="cl"><a href="etnias1.php">GRUPOS ETNICOS</a></li>
				<li id="cl"><a href="index.php">SALIR</a></li>
			</ul>
		</nav>
	<?php
	include("conect.php");
	$con=mysql_connect($db_host,$db_user,$db_pass)or die("problemas en server");
	mysql_select_db($db_name,$con)or die ("problemas en bd");
	mysql_query("update lenguas set nombre='$_POST[nuevo]' where nombre='$_POST[viejo]'",$con) or die (mysql_error());
	echo "Actualizacion correcta";
	?>
	<?php
	include("conect.php");
	$sql_listar="select * from lenguas";
	$res_sql=mysql_query($sql_listar,$link);	
	echo "<table cellspacing=60 align=center bgcolor='#98AFC7' border=8>";
	echo "<br><br><br>";
	echo "<tr>";
		echo "<td>NOMBRE</td>";
		echo "<td>NUMERO DE HABLANTES</td>";
	echo "</tr>";
	echo "LENGUAS DEL ECUADOR";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr>";
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['hablantes']."</td>";
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