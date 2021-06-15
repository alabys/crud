<?php
include 'conexion.php';

$cedula=00000000;
$sql= "Select * from usuarios where cedula'$cedula'";
mysqlmysql_query($conection,$sql)
$data= mysqli_fetch_array($query)
	echo $data['Cedula'];
	echo $data['Nombre'];
	echo $data['Apellidos'];
	echo $data['Direccion'];


  ?>

  <!DOCTYPE html>
 <html>

<head>
	<title> formulario </title>
</head>
	<body>

<form action= "actualizacionuser.php" method= "post">

<label>Cedula</label> 		<input type="text"  value="<?php echo $data['Cedula'];  ?>" 	name="Cedula"> </input>
<label>Nombre</label>		<input type="text" 	value="<?php echo $data['Nombre'];  ?>" 	name="Nombre"> </input>
<label>Apellidos</label>	<input type="text"  value="<?php echo $data['Apellidos'];  ?>" 	name="Apellidos"> </input>
<label>Direccion</label>	<input type="text" 	value="<?php echo $data['Direccion'];  ?>" 	name="Direccion"> </input>
<input type="submit">

</form>

<a href="index.php">pagina principal</a>


</body>

