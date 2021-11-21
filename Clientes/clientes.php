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
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="../Proveedores/proveedores.php">Distribuidores</li>
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
					$sql="SELECT * FROM clientes";
					$result=mysqli_query($conexion, $sql);
					
					while ($mostrar=mysqli_fetch_array($result)) {
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

				<h3> Consulta Cliente </h3>
				<form action="consulta_especifica_cliente.php" method="post">
					Por id:  <input type="text" name = "id_cliente">
					<br>
					Por nombre: <input type="text" name = "nombre">
					<br>
					Por apellido: <input type="text" name = "apellido">
					<br>
					<br>
					<input type="submit" value = "consulta">
				</form>


				<h3> Insertar Cliente </h3>
				<form action="insertar_cliente.php" method="post">
					<input type="submit" value = "Insertar">
				</form>

				<h3> Eliminar Cliente </h3>
				<form action="eliminar_cliente.php" method="post">
					<input type="submit" value = "Eliminar">
				</form>

				<h3> Actualizar Cliente </h3>
				<form action="actualizar_cliente.php" method="post">
					<input type="submit" value = "Actualizar">
				</form>
				
			
		</div>
</body>
</html>