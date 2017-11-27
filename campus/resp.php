<form class="formregistro" method="POST" action="proceso.php?ac=6">
    
    <input type="text" class="cajaresp" name="resp"/>
    <input type="hidden" name="contarea" value="<?php echo $identarea;?>"/>
    <input type="hidden" name="fecha" value="<?php echo date("Y/m/d"); ?>"/>
    <input type="submit" value="enviar respuesta"/>
</form>