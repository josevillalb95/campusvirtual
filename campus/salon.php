<?php 
include("top.php"); 
$idaula=$_GET['idnumero'];
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
     $consulta= mysqli_query($conexion,"SELECT * FROM `tarea` WHERE id_respuesta='$idaula'");
    while($reg3=mysqli_fetch_array($consulta)){  
    $identarea=$reg3["id_tarea"];
    ?>
    <div class="contenido-tarea">
        <div class="tarea-fecha">
            <p><?php echo $reg3["fecha"]; ?></p> 
        </div>
        <div class="tarea">
            <p>
              <?php echo $reg3["tarea"]; ?>  
            </p>
            <?php if($tipoo == "profesor"){ ?>
            <form method="POST" action="respuestas.php">
                <input type="hidden" name="idnumero" value="<?php echo $idaula; ?>" />
                <input type="hidden" name="tarea" value="<?php echo $identarea; ?>"/>
                <button type="submit">ver respuestas</button>
            </form>
            
            <?php } 
            else{ 
                include("resp.php");
                
            } 
            ?>
        </div>
    </div>
        
    
    <?php } 
        if($tipoo == "profesor"){  ?>
       <button id="newtarea">Agregar Tarea</button> <?php } ?>
    	<div class="modal" id="modaltarea" title="agragar tarea">
			<?php 	include("tarea.php");	?>
		</div>
     <script> 
			$("#newtarea").off("click").on("click",function(){
				 $("#modaltarea").dialog(); }
			);
	</script>
    
</div>


<?php
include("pie.php"); ?>