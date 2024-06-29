<!DOCTYPE html>
<html>
<head>
	<title>Veterinaria consulta</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","vet") or 
die ("problemas con la conexion");
$registros=mysqli_query($conexion,"select id,nombredueño,nombremascota,raza,mail from mascotas where nombremascota='$_REQUEST[nombremascota]'") or 
die ("problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros)) {
	echo "id:".$reg['id']."<br>";
	echo "Nombre del dueño:".$reg['nombredueño']."<br>";
	echo "Nombre de la mascota:".$reg['nombremascota']."<br>";
	echo "Raza:".$reg['raza']."<br>";
	echo "Mail:".$reg['mail']."<br>";
	echo "<br>";
	echo "<br>"; 
} else {
	echo "No existe mascota con ese nombre.";
}
mysqli_close($conexion);
?>
<br>
 <h3><a href="consulta2.html"> Modificar datos <a></h3>
</body>
</html>