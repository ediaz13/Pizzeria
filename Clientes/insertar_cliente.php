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
                    <li><a href="proveedores.php">Proveedores</li>
                    <li><a href="#">Insumos</a></li>
                </ul>
            </nav>
			<div id="content_area">
				<h2> Insertar Cliente </h2>
				<form action="insertar.php" method="post">
					Nombre <input type="text" name="nombre">
					<br>
					Apellido <input type="text" name="apellido">
					<br>
					DNI <input type="number" name="dni">
					<br>
					Calle <input type="text" name="calle">
					<br>
					Altura <input type="text" name="altura">
					<br>
					Barrio <input type="text" name="barrio">
					<br>
					Localidad <input type="text" name="localidad">
					<br>
					Nro_tarjeta_debito <input type="text" name="nro_tarjeta_debito">
					<br>
					Nro_mercado_pago <input type="text" name="nro_mercado_pago">
					<br>
					<br>
					<input type="submit" value="Enviar">
				</form>
			</div>
			
		</div>
</body>
</html>