<?php  
{


$hostname='localhost';
$user='root';
$password='';
$database='prueba';

$conection=mysqli_connect($hostname,$user,$password,$database);
if($conection)
{
echo 'Conexion exitosa';
}
else
{
echo 'CnE';
}

}

?>