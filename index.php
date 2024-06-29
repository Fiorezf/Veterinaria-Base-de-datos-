<!DOCTYPE html>
<html>
<head>
	<title>Veterinaria base</title>
</head>
<body>
	<?php
	$conexion=mysqli_connect("localhost","root","","vet") or 
die ("problemas con la conexion");

mysqli_query($conexion,"insert into mascotas(nombredueño,nombremascota,raza,mail) values 
('$_REQUEST[nombredueño]','$_REQUEST[nombremascota]','$_REQUEST[raza]','$_REQUEST[mail]')")
or die ("problemas".mysqli_error($conexion));
mysqli_close($conexion);
echo "Se ha registrado en la veterinaria";
echo "<br>";

	?>
<br>
 <h3><a href="consulta.html"> Buscar Datos <a></h3>

</body>
</html>