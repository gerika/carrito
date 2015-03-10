
<<html>
    <head>
        <title>Carrito de Compras</title>
    </head>
    <body>
       <center>
            <h1>Carrito de compras</h1>
            <a href="./carritodecompras.php" title="ver carrito de compras">
                            <img src="./imagenes/carritodecompras.jpg">
            </a>
            <h2>Listado de Productos</h2>
       </center>
        <?php
        include('conexion.php');
        $re= mysql_query("Select *from  productos")or die(mysql_er);
        while($f=mysql_fetch_array($re))
        {
        ?>
        <br>
        <center>
            <img src="./productos/<?php echo $f['imagen'];?>"><br>
            <span><?php  echo $f['nombre'];?></span>
            <a href="./detalles.php?id=<?php  echo $f['id'];?>">ver</a>
        </center>
        <?php
        }
        ?>
    </body>
</html>
