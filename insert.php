<?php 
include 'conecction.php';
/*
$cedula='080981287';
$nombre='David';
$apellido='Cedeño';
$direccion='San Rafael';
*/
//con dato desde el formulario
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellid=$_POST['edad'];
$direccio=$_POST['telefono'];

$sql=INSERT INTO usuarios (cedula,nombre,edad,telefono) VALUES ('$cedula','$nombre','$edad','$telefono');
if (mysql_query($conection,$sql)){

echo "registro ingresado correctamente";

}else{
echo "registro no insertado";

}




}














?>