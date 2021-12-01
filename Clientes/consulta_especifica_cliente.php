<?php
$url = "localhost";
$usuario = "root";
$pass = "";
$db = "negocio";

$con = mysqli_connect($url, $usuario, $pass, $db) or die("Problemas en la conexion");

$sql = "SELECT * FROM negocio.clientes WHERE id_cliente = '$_REQUEST[id_cliente]' OR nombre like '$_REQUEST[nombre]' or apellido like '$_REQUEST[apellido]'";

$resultado = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="../Styles/Stylesheet.css" />
</head>

<body>
	<div id="wrapper">
		<div id="banner"></div>
		<nav id="navigation">
			<ul id="nav">
				<li><a href="../index.php">Inicio</a></li>
				<li><a href="clientes.php">Clientes</a></li>
				<li><a href="../Proveedores/proveedores.php">Proveedores</li>
				<li><a href="../Insumos/insumos.php">Insumos</a></li>
			</ul>
		</nav>
		<div id="content_area">
			<table border="1">
				<tr>
				<td></td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>DNI</td>
					<td>Calle</td>
					<td>Altura</td>
					<td>Barrio</td>
					<td>Localidad</td>
					<td>Tarjeta debito</td>
					<td>Nro mercado pago</td>
				</tr>

				<?php
				while ($mostrar = mysqli_fetch_array($resultado)) {
				?>

					<tr>
						<td><?php echo $mostrar['id_cliente'] ?></td>
						<td><?php echo $mostrar['nombre'] ?></td>
						<td><?php echo $mostrar['apellido'] ?></td>
						<td><?php echo $mostrar['dni'] ?></td>
						<td><?php echo $mostrar['calle'] ?></td>
						<td><?php echo $mostrar['altura'] ?></td>
						<td><?php echo $mostrar['barrio'] ?></td>
						<td><?php echo $mostrar['localidad'] ?></td>
						<td><?php echo $mostrar['nro_tarjeta_debito'] ?></td>
						<td><?php echo $mostrar['nro_mercado_pago'] ?></td>
					</tr>
				<?php
				}
				?>
			</table>
			<br><br>
			<form action="clientes.php" method="post">
				<input type="submit" value="Volver a grilla clientes">
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