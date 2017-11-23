
	<form class="formregistro" method="POST" action="proceso.php?ac=1">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellido">
		<input type="email" name="email" placeholder="Email">
		<input type="text" name="user" placeholder="Usuario">
		<input type="password" name="contra" placeholder="Contraseña">
		<input type="hidden"  name="tipo" value="<?php echo $typede;?>">
		<label for="nivel">Grado
			<select id="nivel" name="nivel">
				  <option value="Primero">1º ESO</option>
				  <option value="Segundo">2º ESO</option>
				  <option value="Tercero">3º ESO</option>
				  <option value="Cuarto">4º ESO</option>
				  <option value="cinco">1º BAT</option>
				  <option value="seis">2º BAT</option>
			</select>
		</label>
 		<input type="submit" name="enviar" placeholder ="Registrar">


	</form>

