<?php 
$url="localhost";
$usuario="root";
$pass="";
$db="negocio";

$con=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");

$sql="insert into negocio.proveedores (razonsocial,cuit,) values ('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[dni]','$_REQUEST[calle]',$_REQUEST[altura],'$_REQUEST[barrio]','$_REQUEST[localidad]','$_REQUEST[nro_tarjeta_debito]','$_REQUEST[nro_mercado_pago]')";

mysqli_query($con,$sql);
mysqli_close($con);

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
                    <li><a href="proveedores.php">Proveedores</li>
                    <li><a href="#">Insumos</a></li>
                </ul>
            </nav>

            <h3>Ingresado correctamente!</h3>
			<br><br>
			
			<form action="insercion_proveedores.php" method="post">
				<input type="submit" value = "Volver a grilla clientes">
			</form>

			</div>
		</div>
</body>
</html>
