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
				<h2> Insertar Proveedor </h2>
				<form action="insertar.php" method="post">
					razon social <input type="text" name="razonsocial">
					<br>
					cuit <input type="text" name="cuit">
					<br>
					direccion <input type="text" name="direccion">
					<br>
					telefono <input type="text" name="telefono">
					<br>
					<br>
					<input type="submit" value="Enviar">
				</form>
			</div>
			
		</div>
</body>
</html>