 <?php
$consulta= mysqli_query($conexion,"SELECT * FROM `persona` WHERE id_persona='$resultado';");
$reg=mysqli_fetch_array($consulta); 
if($reg){
    $type= $reg["tipo"];
}
switch ($type) {
    case "administrador": 
        $typede="profesor"; ?>
    
        <li id="regi" class="sub" ><a href="#">Registrar Profesor</a></li> 
        <script>
			$("#regi").on("click",function(){
				 $("#modalregistro").dialog(); }
			);
		</script>
        <?php
        break;
    case "estudiante": 
        ?>
        <li id="ses" class="sub" ><a href="logout.php">alumno</a></li>
		<?php
        break;
    case "profesor": ?>
         
         <?php
            $consulta= mysqli_query($conexion,"SELECT * FROM `aula` WHERE id_docente='$id';");
            $reg=mysqli_fetch_array($consulta); 
            if($reg["id_docente"]==$id){   ?>
                 <li   > <a href="#"> ingresar tarea</a> </li>
         <?php }else{ ?>
             <li id="regiaula" class="sub" ><a href="#">crear aula</a></li>
             <script>
        			$("#regiaula").on("click",function(){
        				 $("#modalregistroaula").dialog(); }
        			);
		    </script>
        <?php }
        break;
    default:
        echo "ERROR";
}
?> 
              	