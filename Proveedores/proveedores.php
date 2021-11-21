<?php
	$url="localhost";
	$usuario="root";
	$pass="";
	$db="negocio";
	
	$conexion=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");
	
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
						<td>CUIT</td>
						<td>Dirección</td>
						<td>Telefono</td>
					</tr>

					<?php
					$sql="SELECT * FROM proveedores";
					$result=mysqli_query($conexion, $sql);
					
					while ($mostrar=mysqli_fetch_array($result)) {
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

				<h3> Consulta Proveedor </h3>
				<form action="consulta_especifica_proveedor.php" method="post">
					Por id:  <input type="text" name = "id_proveedor">
					<br>
					Por razón social: <input type="text" name = "razonsocial">
					<br>
					Por CUIT: <input type="text" name = "cuit">
					<br>
					<br>
					<input type="submit" value = "consulta">
				</form>


				<h3> Insertar Proveedor </h3>
				<form action="insertar_proveedor.php" method="post">
					<input type="submit" value = "Insertar">
				</form>

				<h3> Eliminar Proveedor </h3>
				<form action="eliminar_proveedor.php" method="post">
					<input type="submit" value = "Eliminar">
				</form>

				<h3> Actualizar Proveedor </h3>
				<form action="actualizar_proveedor.php" method="post">
					<input type="submit" value = "Actualizar">
				</form>
		</div>
</body>
</html>