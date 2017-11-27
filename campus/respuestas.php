<?php 
include("top.php"); 
$idaula=$_POST['idnumero'];
$identare=$_POST['tarea'];
?>
<div class="contenidosalon">
 
<?php
    $consulta= mysqli_query($conexion,"SELECT * FROM `aula` WHERE 	id_aula='$idaula'");
    if ($reg3=mysqli_fetch_array($consulta)){
   
     ?>
        <div class="infowhile">
            <?php
             $consulta7= mysqli_query($conexion,"SELECT * FROM `persona` WHERE 	id_persona='$id'");
            if ($reg7=mysqli_fetch_array($consulta7)){ 
            $tipoo=$reg7["tipo"]; }
            
            $consulta2= mysqli_query($conexion,"SELECT * FROM `persona` WHERE 	id_persona='$reg3[id_docente]'");
            if ($reg4=mysqli_fetch_array($consulta2)){ 
            ?>
            <div class="profe">
                <img src="img/profesor.svg"></img>
                <strong><?php echo $reg4["nombre"]." ".$reg4["apellido"]; ?></strong>
             </div>  
             <?php } ?>
            <div class="profe">
                <img src="img/cole.svg"></img>
                <strong><?php echo $reg3["grado"];?></strong>
            </div>
         
         
        </div>  
        
<?php    }
?>
        
            
             
            
</div>
    
<div class="tareas">
    <?php
     $consulta= mysqli_query($conexion,"SELECT * FROM `tarea` WHERE id_tarea='$identare'");
    if($reg3=mysqli_fetch_array($consulta)){  ?>
    <div class="contenido-tarea contenido-tarea2">
        <div class="tarea-fecha tarea-fecha2">
            <p><?php echo "FECHA DE ENTREGA: ".$reg3["fecha"]; ?></p> 
          <p>
              <?php echo $reg3["tarea"]; ?>  
            </p>
        </div>
        <div class="tarea">
          
        
        </div>
        <div >
            <?php
                $consulta2= mysqli_query($conexion,"SELECT * FROM `respuesta` WHERE id_tarea='$identare'");
                while($reg4=mysqli_fetch_array($consulta2)){
                    $consulta3= mysqli_query($conexion,"SELECT * FROM `persona` WHERE id_persona='$reg4[id_usuario]';");
                    if($reg5=mysqli_fetch_array($consulta3))
                    echo '<p>'."Alumno: ".$reg5["nombre"]." ".$reg5["apellido"]."   Fecha de entrega: ".$reg4["fecha"].'<p>';
                    echo '<p class="resp">'.$reg4["respuesta"].'<p>';

                }
            
            ?>
            
            
        </div>
    </div>
        
    <?php }?>
</div>




<?php
include("pie.php"); ?>