<?php 
$url="localhost";
$usuario="root";
$pass="";
$db="negocio";

$con=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");

$sql="UPDATE negocio.proveedores SET 
      razon social = '$_REQUEST[razonsocial]',  
      cuit = '$_REQUEST[cuit]',
      direccion = '$_REQUEST[direccion]',
      telefono = '$_REQUEST[telefono]',
      
      WHERE razon social = '$_REQUEST[razonsocial]'";

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
                    <li><a href="../Clientes/clientes.php">Clientes</a></li>
                    <li><a href="../Proveedores/proveedores.php">Proveedores</li>
                    <li><a href="insumos.php">Insumos</a></li>
                </ul>
            </nav>
			<h2>Actualizado correctamente!</h2>
			<br><br>
			<form action="proveedores.php" method="post">
				<input type="submit" value = "Volver a grilla de proveedores">
			</form>

		</div>
		</div>
</body>
</html>