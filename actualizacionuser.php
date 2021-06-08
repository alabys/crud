<?php
include 'conexion.php';

//$cedula=$_POST['Cedula'];


$Cedula="00000000";
$Nombre="David";
$Apellido="Cedeño";
$Direccion="Codesa";

$sql="UPDATE usuarios
SET Nombre= '$Nombre' , Apellido = '$Apellido' , Direccion= '$Direccion'
WHERE Cedula = '$Cedula' ";


$sql='delete from usuarios where Cedula $Cedula';
if (mysqlmysql_query($conection,$sql))
 {
 	echo "registro eliminado";
	
}

else
	echo"registro no eliminado";

  ?>