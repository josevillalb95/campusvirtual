<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>actualiza</title>
</head>
<body>
<?php 

session_start();
$id=$_SESSION['id'];
$conexion= mysqli_connect("localhost","root","","c9");
$consulta= mysqli_query($conexion,"SELECT * FROM `persona` WHERE id_persona='$id';");
$reg=mysqli_fetch_array($consulta); 



 ?>

	<form class="formactualiza" method="POST" action="proceso.php?ac=2">
		<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>"> <!-- mantener el valor constante -->
		Nombre: <input type="text" name="nombre" value="<?php $reg['nombre'];?>" >
		Apellido: <input type="text" name="apellido" value="<?php echo $reg['apellido']; ?>" >
		Email: <input type="email" name="email" value="<?php echo $reg['email'] ?>" >
		Contraseña: <input type="password" name="contra" value="<?php echo $reg['contra'] ?> ">
		<input type="submit" name="enviar" value="actualizar">
	</form>
</body>
</html>