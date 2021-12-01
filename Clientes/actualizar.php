<?php 
$url="localhost";
$usuario="root";
$pass="";
$db="negocio";

$con=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");

$sql="UPDATE negocio.clientes SET 
      nombre = '$_REQUEST[nombre]',  
      apellido = '$_REQUEST[apellido]',
      dni = '$_REQUEST[dni]',
      calle = '$_REQUEST[calle]',
      altura = '$_REQUEST[altura]',
      barrio = '$_REQUEST[barrio]',
      localidad = '$_REQUEST[localidad]',
      nro_tarjeta_debito = '$_REQUEST[nro_tarjeta_debito]',
      nro_mercado_pago = '$_REQUEST[nro_mercado_pago]'
      WHERE id_cliente = '$_REQUEST[id_cliente]'";

$resultado = mysqli_query($con,$sql);

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
			<h2>Actualizado correctamente!</h2>
			<br><br>
			<form action="clientes.php" method="post">
				<input type="submit" value = "Volver a grilla de clientes">
			</form>

		</div>
		</div>
</body>
</html>