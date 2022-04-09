<?php
$url = "localhost";
$usuario = "root";
$pass = "";
$db = "negocio";

$con = mysqli_connect($url, $usuario, $pass, $db) or die("Problemas en la conexion");

$sql = "SELECT * FROM negocio.insumos WHERE id_insumos = '$_REQUEST[id_insumos]' OR descripcion = '$_REQUEST[descripcion]'";

$resultado = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lange="en"></html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="../Styles/Stylesheet.css" />

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0">
	<title>Carousel</title>

</head>

<body>
	<div id="wrapper">
		<div id="banner"></div>
		<nav id="navigation">
			<ul id="nav">
				<li><a href="../index.php">Inicio</a></li>
				<li><a href="../Clientes/clientes.php">Clientes</a></li>
				<li><a href="../Proveedores/proveedores.php">Proveedores</li>
				<li><a href="insumos.php">Insumos</a></li>
			</ul>
		</nav>
		
		<div id="content_area">
			<table border="1">
				<tr>
				<td></td>
						<td>Descripción</td>
						<td>Cantidad</td>
						<td>Disponibilidad</td>
				</tr>

					<?php
					while ($mostrar=mysqli_fetch_array($resultado)) {
					?>

					<tr>
						<td><?php echo $mostrar['id_insumos'] ?></td>
						<td><?php echo $mostrar['descripcion'] ?></td>
						<td><?php echo $mostrar['cantidad_unidades'] ?></td>
						<td><?php echo $mostrar['disponibilidad'] ?></td>
					</tr>

					<?php 
					}
					?>
			</table>
			<br><br>
			<form action="insumos.php" method="post">
				<input type="submit" value="Volver a grilla insumos">
			</form>

		</div>
		
	</div>

</body>

</html>

<?php
mysqli_close($con);
echo "<br>";
echo "Operacion realizada con exito";
echo "<br>";
echo "<br>";
echo '<a href="http://localhost/index.php" class="button">Volver al inicio</a>';

?>