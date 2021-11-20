<?php 
$url="localhost";
$usuario="root";
$pass="";
$db="negocio";

$con=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");

$sql="UPDATE negocio.insumos SET 
      descripcion = '$_REQUEST[descripcion]',  
      cantidad_unidades = '$_REQUEST[cantidad_unidades]',
      disponibilidad = '$_REQUEST[disponibilidad]',
     
      WHERE id_insumos = '$_REQUEST[id_insumos]'";

$resultado = mysqli_query($con,$sql);

mysqli_close($con);
echo "<br>";
echo "Datos actualizados correctamente";
echo "<br>";
echo "<br>";
echo '<a href="http://localhost/Pizzeria/index.php" class="button">Volver al inicio</a>';

?>