<?php  
{


$hostname='localhost';
$user='root';
$password='qwerty12345';
$database='prueba2';

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