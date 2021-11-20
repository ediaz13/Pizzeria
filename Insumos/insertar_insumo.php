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
                    <li><a href="proveedores.php">Distribuidores</li>
                    <li><a href="insumos.php">Insumos</a></li>
                </ul>
            </nav>
			<div id="content_area">
				<h2> Insertar Insumo </h2>
				<form action="insertar.php" method="post">
					Descripción <input type="text" name="descripcion">
					<br>
					Cantidad <input type="text" name="cantidad_unidades">
					<br>
					Disponibilidad <input type="number" name="disponibilidad">
					<br>
					<br>
					<input type="submit" value="Enviar">
				</form>
			</div>
			
		</div>
</body>
</html>