<!DOCTYPE html>
<html>
<head>
	<title> consulta 2</title>
</head>
<body>
	<?php
$conexion=mysqli_connect("localhost","root","","vet") or 
die ("problemas con la conexion");
$registros=mysqli_query($conexion, "select * from mascotas where nombremascota='$_REQUEST[nombremascota]'") or 
die ("problemas en el select:".mysqli_error($conexion));
	if ($reg=mysqli_fetch_array($registros)) {
?>
<form action="actualizar.php" method="post">
	<label> Corrija el nombre de su mascota:</label>
	<input type="text" name="nombrenuevo" value="<?php echo $reg['nombremascota']?>"><br>
	<input type="hidden" name="nombreviejo" value="<?php echo $reg['nombremascota']?>">
	<input type="submit" value="modificar">
</form>
<?php 
} else 
echo "No existe mascota con ese nombre";

	?>

</body>
</html>