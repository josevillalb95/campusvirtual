
	<form class="formregistro" method="POST" action="proceso.php?ac=1">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellido">
		<input type="email" name="email" placeholder="Email">
		<input type="text" name="user" placeholder="Usuario">
		<input type="password" name="contra" placeholder="Contraseña">
		<input type="hidden"  name="tipo" value="<?php echo $typede;?>">
		<label for="nivel">Grado
			<select id="nivel" name="nivel">
				  <option value="1ESO">1º ESO</option>
				  <option value="2ESO">2º ESO</option>
				  <option value="3ESO">3º ESO</option>
				  <option value="4ESO">4º ESO</option>
				  <option value="1BAT">1º BAT</option>
				  <option value="2BAT">2º BAT</option>
			</select>
		</label>
 		<input type="submit" name="enviar" placeholder ="Registrar">


	</form>

