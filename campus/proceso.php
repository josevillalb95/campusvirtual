<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PROCESO</title>
</head>
<body>
	
<?php 
if (isset($_POST['nombre'])&& isset($_POST['apellido'])) {
		// vadilar string y email para mas seguridad
		$nombre= filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
		$apellido=filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
		$usuario=filter_var($_POST['user'], FILTER_SANITIZE_STRING);
		$email=filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		$contra=filter_var(md5($_POST['contra']), FILTER_SANITIZE_STRING);
		$tipo=filter_var($_POST['tipo'], FILTER_SANITIZE_STRING);
		$nivel=filter_var($_POST['nivel'], FILTER_SANITIZE_STRING);
	}
$realizar=$_GET['ac'];
$conexion=mysqli_connect("localhost","root","","c9");
session_start();
$id=$_SESSION['id'];

switch ($realizar) {
	case 1:
		$consulta= "INSERT INTO `persona`( `nombre`, `apellido`, `user`, `email`, `contra`, `tipo`,`grado`) VALUES ('$nombre','$apellido','$usuario','$email','$contra','$tipo','$nivel')";
		mysqli_query($conexion,$consulta);
		break;
	case 2:
		$consulta= "UPDATE `persona` SET `nombre`='$nombre' , `apellido`='$apellido', `email`='$email', `contra`='$contra' where id_persona=$id";
		
		mysqli_query($conexion,$consulta);
		break;
	case 4:
			$consulta= "INSERT INTO `aula`( `id_aula`, `id_docente`) VALUES ('$nivel','$id')";
			mysqli_query($conexion,$consulta);
		
		
		break;
	default:
		$id= $_GET['id']; 
		$consulta= "DELETE FROM personas where id_p = $id";
		mysqli_query($conexion,$consulta);
		break;
}
header("location:index.php");
?>
 
</body>
</html>