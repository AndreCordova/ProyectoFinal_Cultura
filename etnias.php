<!DOCTYPE html>
<html lang="es">
<head>
	<title>GRUPOS ETNICOS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="logo"><a href="index.html"><img src="images/logo1.jpg"></a></li>
				<li id="cl"><a href="index.html">Inicio</a></li>
				<li id="cl"><a href="lenguas.php">Lenguas</a></li>
				<li id="cl"><a href="fiestas.php">Fiestas Populares</a></li>
				<li id="cl"><a href="gastronomia.php">Gastronomia</a></li>
				<li id="cl"><a href="tradiciones.php">Tradiciones</a></li>
				<li id="cl"><a href="etnias.php">Grupos Etnicos</a></li>
				<li id="cl"><a href="administrador.php">Administrador</a></li><br/><br/>
			</ul>
		</nav>
		<img src="images/etnias.jpg" width="800" height="500" alt=""><br/><br/>
		<div class="row">
        <div class="footer-download">
          <ul class="callout animate-in">
            <a href="etnias.php?letra=A">A</a>
            <a href="etnias.php?letra=B">B</a>
            <a href="etnias.php?letra=C">C</a>
            <a href="etnias.php?letra=D">D</a>
            <a href="etnias.php?letra=E">E</a>
            <a href="etnias.php?letra=F">F</a>
            <a href="etnias.php?letra=G">G</a>
            <a href="etnias.php?letra=H">H</a>
            <a href="etnias.php?letra=I">I</a>
            <a href="etnias.php?letra=J">J</a>
            <a href="etnias.php?letra=K">K</a>
            <a href="etnias.php?letra=L">L</a>
            <a href="etnias.php?letra=M">M</a>
            <a href="etnias.php?letra=N">N</a>
            <a href="etnias.php?letra=O">O</a>
            <a href="etnias.php?letra=P">P</a>
            <a href="etnias.php?letra=Q">Q</a>
            <a href="etnias.php?letra=R">R</a>
            <a href="etnias.php?letra=S">S</a>
            <a href="etnias.php?letra=T">T</a>
            <a href="etnias.php?letra=U">U</a>
            <a href="etnias.php?letra=V">V</a>
            <a href="etnias.php?letra=W">W</a>
            <a href="etnias.php?letra=X">X</a>
            <a href="etnias.php?letra=Y">Y</a>
            <a href="etnias.php?letra=Z">Z</a>
          </ul>
        </div>
      </div>
<?php
include("conect.php");
extract($_POST);
$letra="";
extract($_GET);
if ($letra==NULL) {
}
$query = "SELECT * FROM etnias where nombre like '$letra%'";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
?>        
  <table class="table table-striped" "align=center bgcolor='#98AFC7' border=8">
<?php while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { ?>
      <tr>  
        <td><a"lenguas.php?ida=' <?php echo $line["id"];?>'"><?php echo "Nombre: "; echo $line["nombre"]; echo "<br>" ?><?php  echo "Numero de habitantes: ";
         echo $line["habitantes"]; echo "<br>" ?></a><br><br></td>
      </tr>
<?php }?>
<br/><br/>
		<?php
	include("conect.php");
	$sql_listar="select * from etnias";
	$res_sql=mysql_query($sql_listar,$link);
	echo "RESULTADOS DE LA BUSQUEDA:";
	echo "<table cellspacing=60 align=center bgcolor='#98AFC7' border=8>";
	echo "<br><br><br><br><br>";
	echo "<tr>";
		echo "<td>NOMBRE</td>";
		echo "<td>NUMERO DE HABITANTES</td>";
	echo "</tr>";
	echo "GRUPOS ETNICOS DEL ECUADOR";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr text=center>";
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['habitantes']."</td>";
		echo "</tr>";
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