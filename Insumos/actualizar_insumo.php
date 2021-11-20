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
                    <li><a href="..index.php">Inicio</a></li>
                    <li><a href="../Clientes/clientes.php">Clientes</a></li>
                    <li><a href="../Proveedores/proveedores.php">Distribuidores</li>
                    <li><a href="insumos.php">Insumos</a></li>
                </ul>
            </nav>
			<div id="content_area">
                  <h2> Actualizar Insumos</h4>
				<form action="actualizar.php" method="post">
					<p> Ingrese el id del Insumo.. </p>
					id insumo <input type="number" name="id_insumos"> 
					<br>
					<p> Ingrese el valor de los campos a modificar.. <p>
					<br>		
					Descripcion <input type="text" name="descripcion">
					<br>
					Cantidad <input type="number" name="cantidad_unidades">
					<br>
					Disponibilidad <input type="number" name="disponibilidad">
					<br>
					<br>
					<input type="submit" value="Actualizar valores">
				</form>
				
			</div>
			
		</div>
</body>
</html>