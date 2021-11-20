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
                    <li><a href="../Proveedores/proveedores.php">Distribuidores</li>
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
					$sql="SELECT * FROM insumos";
					$result=mysqli_query($conexion, $sql);
					
					while ($mostrar=mysqli_fetch_array($result)) {
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

				<h3> Consulta Insumos </h3>
				<form action="consulta_especifica_insumo.php" method="post">
					Por id:  <input type="text" name = "id_insumos">
					<br>
					Por descripcion: <input type="text" name = "descripcion">
					<br>
					<input type="submit" value = "consulta">
				</form>


				<h3> Insertar Insumos </h3>
				<form action="insertar_insumos.php" method="post">
					<input type="submit" value = "Insertar">
				</form>

				<h3> Eliminar Insumos </h3>
				<form action="eliminar_insumos.php" method="post">
					<input type="submit" value = "Eliminar">
				</form>

				<h3> Actualizar Insumos </h3>
				<form action="actualizar_insumos.php" method="post">
					<input type="submit" value = "Actualizar">
				</form>
			</div>
			
		</div>
</body>
</html>