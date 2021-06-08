<?php 
include 'conexion.php';

$cedula=$_POST['Cedula'];

$sql='delete from usuarios where cedula $cedula';
if (mysqlmysql_query($conection,$sql))
 {
 	echo "registro eliminado";
	
}

else
	echo"registro no eliminado";
?>