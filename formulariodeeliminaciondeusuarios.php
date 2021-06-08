<?php
include 'conexion.php';
$sql='select Cedula from usuarios';
$squery=mysql_query($conection,$sql);

while ($data=mysqli_fetch_array($query)) 

{
	echo $data['Cedula'];

	
}


  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<title>Eliminar usuarios</title>
  </head>
  <body>
  <form action="deleteuse.php" nethod="post" ></form>
<label>cedula</label> <select name="cedula"> <option>00000000</option> </select>
<input type="submit" name="">

  </body>
  </html>