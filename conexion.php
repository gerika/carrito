
<?php
   $server="localhost";
   $username="root";
   $password="";
   $db="carritocompras";
   $con=  mysql_connect($server,$username,$password)or die("no se ha podido 
                                  conectar a la base de datos ");
   mysql_select_db($db,$con) or die ("la base de datos no existe");  
?>