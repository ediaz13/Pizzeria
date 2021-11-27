<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
		<div id="wrapper">
			<div id="banner"></div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="proveedores.php">Proveedores</li>
                    <li><a href="#">Insumos</a></li>
                </ul>
            </nav>
			<div id="content_area">
				<h2> Insertar proveedor </h2>
				<form action="insertar.php" method="post">
					nombre <input type="text" name="nombre">
					<br>
					apellido <input type="text" name="apellido">
					<br>
					dni <input type="number" name="dni">
					<br>
					calle <input type="text" name="calle">
					<br>
					altura <input type="text" name="altura">
					<br>
					barrio <input type="text" name="barrio">
					<br>
					localidad <input type="text" name="localidad">
					<br>
					nro_tarjeta_debito <input type="text" name="nro_tarjeta_debito">
					<br>
					nro_mercado_pago <input type="text" name="nro_mercado_pago">
					<br>
					<br>
					<input type="submit" value="Enviar">
				</form>

				<h2> Consultar proveedor </h2>
				<form action="consultar.php" method="post">
					<input type = "submit" value = "Consultar">
				</form> 
				<p> Consulta especifica </p>
				<form action="ce.php" method="post">
					Por id:  <input type="text" name = "id_cliente">
					<br>
					Por nombre: <input type="text" name = "nombre">
					<br>
					Por apellido: <input type="text" name = "apellido">
					<br>
					<br>
					<input type="submit" value = "consulta">
				</form>
				<h2>Eliminar proveedor</h3>
				<form action = "borrar.php">
					Por id:  <input type="text" name = "id_cliente">
					<br>
					Por nombre: <input type="text" name = "nombre">
					<br>
					Por apellido: <input type="text" name = "apellido">
					<br>
					<br>
					<input type="submit" value="Eliminar">
				</form>
				<h2> Actualizar proveedor</h4>
				<form action="actualizar.php" method="post">
					<p> Ingrese el id del cliente.. </p>
					id_cliente <input type="number" name="id_cliente"> 
					<br>
					<p> Ingrese el valor de los campos a modificar.. <p>	
					nombre <input type="text" name="nombre">
					<br>
					apellido <input type="text" name="apellido">
					<br>
					dni <input type="number" name="dni">
					<br>
					calle <input type="text" name="calle">
					<br>
					altura <input type="text" name="altura">
					<br>
					barrio <input type="text" name="barrio">
					<br>
					localidad <input type="text" name="localidad">
					<br>
					nro_tarjeta_debito <input type="text" name="nro_tarjeta_debito">
					<br>
					nro_mercado_pago <input type="text" name="nro_mercado_pago">
					<br>
					<br>
					<input type="submit" value="Actualizar valores">
				</form>
			</div>
			
		</div>
</body>
</html>