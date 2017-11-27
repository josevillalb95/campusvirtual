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
	
	}
	$nivel=filter_var($_POST['nivel'], FILTER_SANITIZE_STRING);
	$idprofe= $_POST['idprofe'];

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
			$aula=$idprofe.$nivel;
			$consulta= "INSERT INTO `aula`( `id_aula`,`id_docente`,`grado`) VALUES ('$aula','$idprofe','$nivel')";
			mysqli_query($conexion,$consulta);
	
		break;
		
	case 5:
			$idtarea= $_POST['idtarea'];
			$tarea= $_POST['tarea'];
			$fecha= $_POST['fecha'];
			$consulta= "INSERT INTO `tarea`( `tarea`,`id_docente`,`id_respuesta`,`fecha`) VALUES ('$tarea','$id','$idtarea','$fecha')";
			mysqli_query($conexion,$consulta);
	
		break;
		
	case 6:
		$contarea= $_POST['contarea'];
		$fecha= $_POST['fecha'];
		$resp= $_POST['resp'];
		$consulta= "INSERT INTO `respuesta`( `id_usuario`,`id_tarea`,`respuesta`,`fecha`) VALUES ('$id','$contarea','$resp','$fecha')";
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