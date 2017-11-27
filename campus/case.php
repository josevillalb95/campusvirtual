 <?php
$consulta= mysqli_query($conexion,"SELECT * FROM `persona` WHERE id_persona='$resultado';");
$reg=mysqli_fetch_array($consulta); 
if($reg){
    $type= $reg["tipo"];
    $anio= $reg["grado"];
}
switch ($type) {
    case "administrador": 
        $typede="profesor"; ?>
         <li id="regiaula" class="sub" ><a href="#">Crear aula</a></li>
             <script>
        			$("#regiaula").on("click",function(){
        				 $("#modalregistroaula").dialog(); }
        			);
		    </script>
		
        <li id="regi" class="sub" ><a href="#">Registrar Profesor</a></li>
        <script> 
			$("#regi").on("click",function(){
				 $("#modalregistro").dialog(); }
			);
		</script>
        <?php
        break;
    case "estudiante": 
        $consulta= mysqli_query($conexion,"SELECT * FROM `aula` WHERE grado='$anio'");
        while ($reg3=mysqli_fetch_array($consulta)){ 
            $id_aula=$reg3["id_aula"];?>
            <li  class="sub" id="salon" ><?php echo "<a href='salon.php?idnumero=".$id_aula."'>".$reg3["grado"]."</a>"; ?></li>
		<?php   } 
        ?>
        
        
		<?php
        break;
    case "profesor": 
        
        $consulta= mysqli_query($conexion,"SELECT * FROM `aula` WHERE id_docente='$resultado'");
        while ($reg3=mysqli_fetch_array($consulta)){ 
            $id_aula=$reg3["id_aula"];?>
            <li  class="sub" id="salon" ><?php echo "<a href='salon.php?idnumero=".$id_aula."'>".$reg3["grado"]."</a>"; ?></li>
		<?php   } 
        break;
    default:
        echo "ERROR";
}
?> 
              	