<?php 
$user= filter_var($_POST['user'], FILTER_SANITIZE_STRING);
$password= filter_var($_POST['contra'], FILTER_SANITIZE_STRING);

$conexion=mysqli_connect("localhost","root","","c9");
session_start();

$consulta= mysqli_query($conexion,"SELECT * FROM `persona` WHERE `user`='$user';");
// $consulta2="SELECT * FROM persona WHERE email='$user';";
// die($consulta2);
// var_dump($consulta);

$reg=mysqli_fetch_array($consulta); 

if($reg){ 
    if($reg["contra"]==md5($password)){
    	$_SESSION['id'] = $reg["id_persona"];
    
    }
} 
header("location:index.php");

?>