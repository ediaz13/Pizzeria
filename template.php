<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Clientes/clientes.php">Clientes</a></li>
                    <li><a href="proveedores.php">Distribuidores</a></li>
                    <li><a href="Insumos/insumos.php">Insumos</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            <footer>
                <p>Aplicacion Pizzeria</p>
            </footer>
        </div>
    </body>
</html>
