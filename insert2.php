<?php 
include 'conexion.php';

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$edad=$_POST['edad'];
$direccion=$_POST['direccion'];

$sql= 'INSERT INTO proveedores (cedula,nombre,apellidos,edad,direccion) values('$cedula','$nombre','$apellidos','$edad', '$direccion' )';

if (mysql_query($conection,$sql)){

echo "registro ingresado correctamente";

}else{
echo "registro no insertado";

}


?>