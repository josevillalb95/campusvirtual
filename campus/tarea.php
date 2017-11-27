<form class="formregistro" method="POST" action="proceso.php?ac=5">
    
    <input type="text" name="tarea"/>
    <input type="date" name="fecha"/>
    <input type="hidden" name="idtarea" value="<?php echo $idaula;?>"/>
    <input type="submit" value="Submit"/>
</form>