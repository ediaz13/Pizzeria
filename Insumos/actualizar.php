<?php 
$url="localhost";
$usuario="root";
$pass="";
$db="negocio";

$con=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");

$sql="UPDATE negocio.insumos SET 
      descripcion = '$_REQUEST[descripcion]',  
      cantidad_unidades = '$_REQUEST[cantidad_unidades]',
      disponibilidad = '$_REQUEST[disponibilidad]'
     
      WHERE id_insumos = '$_REQUEST[id_insumos]'";

$resultado = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>z
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
			<h3>Actualizado correctamente!</h3>
			<br><br>
			<form action="insumos.php" method="post">
				<input type="submit" value = "Volver a grilla insumos">
			</form>

		</div>
		</div>
</body>
</html>