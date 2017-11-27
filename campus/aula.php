<form class="formregistro" method="POST" action="proceso.php?ac=4">
	
		
		
	<label for="nivel">Nivel: 
			 	<select id="nivel" name="nivel">
				  <option value="1ESO">1º ESO</option>
				  <option value="2ESO">2º ESO</option>
				  <option value="3ESO">3º ESO</option>
				  <option value="4ESO">4º ESO</option>
				  <option value="1BAT">1º BAT</option>
				  <option value="2BAT">2º BAT</option>
			</select>
	</label>
	

			<select id="prof" name="idprofe">
			<?php	
				$consulta= mysqli_query($conexion,"SELECT * FROM `persona` WHERE tipo='profesor';");
				$result=$consulta or die (mysql_error());
				while(	 $reg3=mysqli_fetch_array($result) ){ 
				 echo '<option value="'.$reg3['id_persona'].'">'.$reg3['nombre']." ".$reg3['apellido'].'</option>';
			 } ?>
			</select>
	
 		<input type="submit" name="enviar" placeholder ="Registrar aula">


</form>