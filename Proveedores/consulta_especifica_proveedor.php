<?php
$url = "localhost";
$usuario = "root";
$pass = "";
$db = "negocio";

$con = mysqli_connect($url, $usuario, $pass, $db) or die("Problemas en la conexion");

$sql = "SELECT * FROM negocio.proveedores WHERE id_proveedor = '$_REQUEST[id_proveedor]' OR razonsocial like '$_REQUEST[razonsocial]' or cuit like '$_REQUEST[cuit]'";

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
				<li><a href="../Clientes/clientes.php">Clientes</a></li>
				<li><a href="proveedores.php">Proveedores</li>
				<li><a href="../Insumos/insumos.php">Insumos</a></li>
			</ul>
		</nav>
		<div id="content_area">
			<table border="1">
				<tr>
				<td></td>
						<td>Razon Social</td>
						<td>Cuit</td>
						<td>Direccion</td>
						<td>Telefono</td>
				</tr>

					<?php
					while ($mostrar=mysqli_fetch_array($resultado)) {
					?>

					<tr>
						<td><?php echo $mostrar['id_proveedor'] ?></td>
						<td><?php echo $mostrar['razonsocial'] ?></td>
						<td><?php echo $mostrar['cuit'] ?></td>
						<td><?php echo $mostrar['direccion'] ?></td>
						<td><?php echo $mostrar['telefono'] ?></td>
					</tr>

					<?php 
					}
					?>
			</table>
			<br><br>
			<form action="proveedores.php" method="post">
				<input type="submit" value="Volver a grilla proveedores">
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