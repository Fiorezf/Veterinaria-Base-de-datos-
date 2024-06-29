<!DOCTYPE html>
<html>
<head>
	<title> Veterinaria base</title>
</head>
<body>
	<?php
$conexion=mysqli_connect("localhost","root","","vet") or 
die ("problemas con la conexion");
$registros=mysqli_query($conexion,"select id,nombredueño,nombremascota,raza,mail from mascotas") or
die ("problemas en el select:".mysqli_error($conexion));
while ($reg=mysqli_fetch_array($registros)) {
	echo "id:".$reg['id']."<br>";
	echo "Nombre del dueño:".$reg['nombredueño']."<br>";
	echo "Nombre de la mascota:".$reg['nombremascota']."<br>";
	echo "Raza:".$reg['raza']."<br>";
	echo "Mail:".$reg['mail']."<br>";
	echo "<br>";
	echo "<br>";
}
mysqli_close($conexion);


	?>

</body>
</html>