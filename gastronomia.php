<!DOCTYPE html>
<html lang="es">
<head>
	<title>GASTRONOMIA</title>
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
			<img src="images/gastronomia.jpg" width="800" height="500" alt=""><br/><br/>
		<nav>
			<ul>
				<li id="cl"><a href="costa.php">Costa</a></li>
				<li id="cl"><a href="sierra.php">Sierra</a></li>
				<li id="cl"><a href="amazonia.php">Amazonia</a></li>
			</ul>
		</nav>
		<div class="row">
        <div class="footer-download">
          <ul class="callout animate-in">
          	<br><br><br>
            <a href="gastronomia.php?letra=A">A</a>
            <a href="gastronomia.php?letra=B">B</a>
            <a href="gastronomia.php?letra=C">C</a>
            <a href="gastronomia.php?letra=D">D</a>
            <a href="gastronomia.php?letra=E">E</a>
            <a href="gastronomia.php?letra=F">F</a>
            <a href="gastronomia.php?letra=G">G</a>
            <a href="gastronomia.php?letra=H">H</a>
            <a href="gastronomia.php?letra=I">I</a>
            <a href="gastronomia.php?letra=J">J</a>
            <a href="gastronomia.php?letra=K">K</a>
            <a href="gastronomia.php?letra=L">L</a>
            <a href="gastronomia.php?letra=M">M</a>
            <a href="gastronomia.php?letra=N">N</a>
            <a href="gastronomia.php?letra=O">O</a>
            <a href="gastronomia.php?letra=P">P</a>
            <a href="gastronomia.php?letra=Q">Q</a>
            <a href="gastronomia.php?letra=R">R</a>
            <a href="gastronomia.php?letra=S">S</a>
            <a href="gastronomia.php?letra=T">T</a>
            <a href="gastronomia.php?letra=U">U</a>
            <a href="gastronomia.php?letra=V">V</a>
            <a href="gastronomia.php?letra=W">W</a>
            <a href="gastronomia.php?letra=X">X</a>
            <a href="gastronomia.php?letra=Y">Y</a>
            <a href="gastronomia.php?letra=Z">Z</a>
          </ul>
        </div>
      </div>
<?php
include("conect.php");
extract($_POST);
$letra="";
extract($_GET);
echo "<br><br><br>";
echo "RESULTADOS DE LA BUSQUEDA:";
if ($letra==NULL) {
}
$query = "SELECT * FROM gastronomia where nombre like '$letra%'";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
?>        
  <table class="table table-striped" "align=center bgcolor='#98AFC7' border=8">
<?php while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { ?>
      <tr>  
        <td><a"lenguas.php?ida=' <?php echo $line["id"];?>'"><?php echo "Nombre: "; echo $line["nombre"]; echo "<br>" ?><?php  echo "Ingredientes: ";
        echo $line["ingredientes"]; echo "<br>" ?><?php  echo "Descripcion: "; echo $line["descripcion"]; echo "<br>" ?></a><br><br></td>
      </tr>
<?php }?>
<br/><br/>
	</tbody>
	</table>
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