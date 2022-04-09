<?php
	$url="localhost";
	$usuario="root";
	$pass="";
	$db="negocio";
	
	$conexion=mysqli_connect($url,$usuario,$pass,$db) or die ("Problemas en la conexion");
	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="../Styles/Stylesheet.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		 
		<title>Insumos</title> 
		<link href="css/bootstrap.min.css" rel="stylesheet"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		
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

			<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
		
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="4000">
				<img src="../Images/Pizza 1.png" class="d-block w-10" alt="banner 1">
				</div>
				<div class="carousel-item"data-bs-interval="4000">
				<img src="../Images/Pizza 2.png" class="d-block w-10" alt="banner 2">
				</div>
				<div class="carousel-item"data-bs-interval="4000">
				<img src="../Images/Pizza 3.png" class="d-block w-10" alt="banner 3">
				</div>
				<div class="carousel-item"data-bs-interval="4000">
				<img src="../Images/Pizza 4.png" class="d-block w-10" alt="banner 4">
				</div>
				<div class="carousel-item"data-bs-interval="4000">
				<img src="../Images/Pizza 5.png" class="d-block w-10" alt="banner 5">
				</div>
				<div class="carousel-item"data-bs-interval="4000">
				<img src="../Images/Pizza 6.png" class="d-block w-10" alt="banner 6">
				</div>
				<div class="carousel-item"data-bs-interval="4000">
				<img src="../Images/Pizza 7.png" class="d-block w-10" alt="banner 7">
				</div>
			</div>
	
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Anterior</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Siguiente</span>
			</button>
			</div>

			<div id="content_area">

		</div>	
		
			<h2> Consulta Insumos </h2>
				<form action="consulta_especifica_insumo.php" method="post">
					Por id:  <input type="text" name = "id_insumos">
					<br>
					Por descripcion: <input type="text" name = "descripcion">
					<br>
					<input type="submit" value = "consulta">
				</form>
				<br>
				<br>
				<br>
			

			<div class="btn-group" role="group">
				<form action="insertar_insumo.php" method="post">
					<input type="submit" value = "Insertar">
				</form>
				<form action="eliminar_insumo.php" method="post">
					<input type="submit" value = "Eliminar">
				</form>
				<form action="actualizar_insumo.php" method="post">
					<input type="submit" value = "Actualizar">
				</form>
				<br>
				<br>

			</div>
			<br>
			<br><br>

			
			<table class="table table-responsive table-bordered table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Descripción</th>
						<th>Cantidad</th>
						<th>Disponibilidad</th>
					</tr>
				</thead>

				<?php
					$sql="SELECT * FROM insumos";
					$result=mysqli_query($conexion, $sql);
					
					while ($mostrar=mysqli_fetch_array($result)) {
					?>

				<tbody>
					<tr>
						<td><?php echo $mostrar['id_insumos'] ?></td>
						<td><?php echo $mostrar['descripcion'] ?></td>
						<td><?php echo $mostrar['cantidad_unidades'] ?></td>
						<td><?php echo $mostrar['disponibilidad'] ?></td>
					<tr>

					</tr>
			
					<?php 
					}
					?>
				</tbody>
				</table>
				<br><br>

		</div>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
				
		</div>
		<br><br>
</body>
</html>

