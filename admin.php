<?php
	include "conexion.php";
?>
<html>
    <head>
        <title>Administracion</title>
    </head>
    <body>
        <h1>Menu de Administracion</h1>
        <a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carritodecompras.jpg">
        </a>
        <menu>
            <li><a href="./">Inicio</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#">Agregar</a></li>
            <li><a href="#">Salir</a></li>
        </menu>
    <center><h1>Ultimas Compras</h1></center>
    <table border=1 width="100%">
        <tr>
            <td><center>Imagen</center></td>
            <td><center>Nombre</center></td>
            <td><center>Precio</center></td>
            <td><center>Cantidad</center></td>
            <td><center>Subtotal</center></td>
        </tr>
        <?php
        
         $re=mysql_query("select *from compras");
         $numeroventa=0;
         while($f= mysql_fetch_array($re))
         {
             if($numeroventa!=$f['numeroventa'])
             {
                 echo "<tr><td><center>Compra Numero:".$f['numeroventa']."</center></td></tr>";
             
             }
             $numeroventa=$f['numeroventa'];
             ?>
             <tr>
                 <td><center><img src="./productos/<?php echo $f['imagen']; ?>" width="100px" heigth="100px"></center></td>
                 <td><center><?php echo $f['nombre'];?></center></td>
                 <td><center><?php echo $f['precio'];?></center></td>
                 <td><center><?php echo $f['cantidad'];?></center></td>
                 <td><center><?php echo $f['subtotal'];?></center></td> 
             </tr>
             <?php
         }  
        ?>
    </table>
    </body>
</html>
