<!DOCTYPE html>
<html lang="es">
<head>
	<title>BUSCAR LENGUAS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/init.js"></script>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="logo"><a href="index.html"><img src="images/logo1.jpg"></a></li>
				<li id="cl"><a href="lenguas.php">LENGUAS</a></li>
				<li id="cl"><a href="fiestas.php">FIESTAS POPULARES</a></li>
				<li id="cl"><a href="gastronomia.php">GASTRONOMIA</a></li>
				<li id="cl"><a href="tradiciones.php">TRADICIONES</a></li>
				<li id="cl"><a href="etnias.php">GRUPOS ETNICOS</a></li>
				<li id="cl"><a href="administrador.php">ADMINISTRADOR</a></li>
			</ul>
		</nav>
		<div class="row">
        <div class="footer-download">
          <ul class="callout animate-in">
            <a href="lenguas.php?letra=A">A</a>
            <a href="lenguas.php?letra=B">B</a>
            <a href="lenguas.php?letra=C">C</a>
            <a href="lenguas.php?letra=D">D</a>
            <a href="lenguas.php?letra=E">E</a>
            <a href="lenguas.php?letra=F">F</a>
            <a href="lenguas.php?letra=G">G</a>
            <a href="lenguas.php?letra=H">H</a>
            <a href="lenguas.php?letra=I">I</a>
            <a href="lenguas.php?letra=J">J</a>
            <a href="lenguas.php?letra=K">K</a>
            <a href="lenguas.php?letra=L">L</a>
            <a href="lenguas.php?letra=M">M</a>
            <a href="lenguas.php?letra=N">N</a>
            <a href="lenguas.php?letra=O">O</a>
            <a href="lenguas.php?letra=P">P</a>
            <a href="lenguas.php?letra=Q">Q</a>
            <a href="lenguas.php?letra=R">R</a>
            <a href="lenguas.php?letra=S">S</a>
            <a href="lenguas.php?letra=T">T</a>
            <a href="lenguas.php?letra=U">U</a>
            <a href="lenguas.php?letra=V">V</a>
            <a href="lenguas.php?letra=W">W</a>
            <a href="lenguas.php?letra=X">X</a>
            <a href="lenguas.php?letra=Y">Y</a>
            <a href="lenguas.php?letra=Z">Z</a>
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
$query = "SELECT * FROM lenguas where nombre like '$letra%'";
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
?>        
  <table class="table table-striped">
      <tr>
        <td>Lengua encontrada</td>
      </tr>
        <br>
   
<?php while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { ?>
      <tr>  
        <td><a href="lenguas.php?ida='<?php echo $line["id"];?>'"><?php echo $line["nombre"];?><?php echo "  ";?><?php echo $line["hablantes"];?></a><br><br></td>
      </tr>
<?php }?>
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