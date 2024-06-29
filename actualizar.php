<!DOCTYPE html>
<html>
<head>
	<title>Veterinaria actualizacion</title>
</head>
<body>
	<?php
	$conexion=mysqli_connect("localhost","root","","vet") or 
die ("problemas con la conexion");

mysqli_query($conexion,"update mascotas set nombremascota='$_REQUEST[nombrenuevo]' where nombremascota='$_REQUEST[nombreviejo]'") or 
die ("Problemas en el select".mysqli_error($conexion));
echo "El nombre fue modificado con exito";
?>
<br>


</body>
</html>