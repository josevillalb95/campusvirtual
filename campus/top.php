<!--https://developers.google.com/speed/libraries/#jquery-ui-->

<?php
$conexion=mysqli_connect("localhost","root","","c9");
session_start();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edukeos</title>
	<link rel="stylesheet" href="  normalize.css">
	<link rel="stylesheet" href="  global.css">
	<link rel="stylesheet" href=" style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	

</head> 
<body>
	 <input type="hidden" id="userid" value="<?php echo $_SESSION['id']; ?>"/> 
		<header>
		<div class="banner">
			<input type="checkbox" id="btn-menu">
			<label for="btn-menu"><span class="icon-menu3"></span></label>
			<nav class="menu">
				<ul>
						<li class="liBusq"><a href="#">Usuario</a>
						<ul class="subUl">
							<?php
							if ($_SESSION['id']!=''){
							$resultado = $_SESSION['id'];
							include"case.php";
							
							?>
								<li id="ses" class="sub" ><a href="logout.php">Cerrar sesion</a></li>
								<script>
									$("#muestrainformacion").on("click",function(){
										$("#modalinformacion").dialog();
									});
									
								</script>
								<li id="edit" class="sub"><a href="#">Editar</a></li>
								<script>
									$("#edit").on("click",function(){
										$( "#modalactualiza" ).dialog();
									});
								</script>
								
						    <?php } 
						    
							else {	
								$typede= "estudiante"; ?>
								<li id="ses" class="sub"><a href="#">Iniciar Sesion</a></li>
								<script>
									$("#ses").on("click",function(){
									
											 $( "#dialog" ).dialog();
										
									});
								</script>
										
								<li id="regi" class="sub" ><a href="#">Registrase</a></li>
									
									<script>
										$("#regi").on("click",function(){
											 $("#modalregistro").dialog(); }
										);
									</script>
							<?php } ?>
						</ul>
					</li>
				
					<li class="liBusq"><a href="javascript:void(0);">Salon</a>
						<ul class="subUl">
							<li class="sub"><a href="#"> Profesor</a></li>
							<li class="sub"><a href="#">Estudiante</a></li>
							<li class="sub"><a href="#">Familiares</a></li>
						</ul>
					</li>
					
					<li class="liBusq"><a href="index.php">Inicio</a></li>
					
					<li id="busq" >
					
						<form action="busqueda.php" method="post">
							<input type="text" name="bus"/>
								<input type="image" class="icon-search" value=" " style="display: inline; padding: 5px;">

						</form>
					
					</li>
				</ul>
			</nav>
			
			<div class="posNomb">
				<div class="imgLogo"><img src=" img/logo.png" alt=""></div>
			</div>
		
			<div class="motivacion">
				<div class="motivacion-caja">
					<div style="background-color:#8a9045;">
						<span class="icon-lab icon"></span>
						<span>INVESTIGAR</span>
					</div>
					<div style="background-color:#a88b60; ">
						<span class="icon-coin-dollar icon"></span>
						<span>LLEGAR</span>
					</div> 
				</div>
				<div  class="motivacion-caja">
					<div style="background-color:#3e769a;">
						<span class="icon-display icon"></span>
						<span>DOCUMENTARSE</span>
					</div>
					<div style="background-color:#c16622; ">
						<span class="icon-spell-check icon"></span>
						<span>ENTENDER</span>
					</div> 
				</div>
				<div class="motivacion-caja">
					<div style="background-color: #896ca9;">
						<span class="icon-binoculars icon"></span>
						<span>BUSCAR</span>
					</div>
					<div style="background-color: #dd9d13;">
						
						<span class="icon-office icon"></span>
						<span>EMPRENDER</span>
					</div> 
				</div >
			</div>
		</div>

		</header>
		<div class="modal" id="dialog" title="iniciar sesion">
			<?php include("login.php");?> 
		</div>
 
		<div class="modal" id="modalregistro" title="registrarse">
			<?php 	include("registrar.php");	?>
		 	 
		</div>
		<div class="modal" id="modalregistroaula" title="registrarse">
			<?php 	include("aula.php");	?>
		 	 
		</div>
		<div class="modal" id="modalactualiza" title="Modificar">
			<?php 	include("actualiza.php");	?>
		</div>
	  
	  
