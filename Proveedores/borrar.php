<?php 
$url="localhost";
$usuario="root";
$pass="";
$db="negocio";

$con=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");

$sql="SELECT * FROM negocio.proveedores WHERE razonsocial = '$_REQUEST[razonsocial]' OR cuit like '$_REQUEST[cuit]'";

$resultado = mysqli_query($con,$sql);

$sql="DELETE FROM negocio.proveedores WHERE razonsocial = '$_REQUEST[razonsocial]' OR cuit like '$_REQUEST[cuit]'";

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
                <li><a href="index.php">Inicio</a></li>
                    <li><a href="../Clientes/clientes.php">Clientes</a></li>
                    <li><a href="proveedores.php">Proveedores<</a></li>
                    <li><a href="../Insumos/insumos.php">Insumos</a></li>
                </ul>
            </nav>
			<h2>Eliminado correctamente!</h2>
			<br><br>
			<form action="proveedores.php" method="post">
				<input type="submit" value = "Volver a grilla proveedores">
			</form>

		</div>
		</div>
</body>
</html>