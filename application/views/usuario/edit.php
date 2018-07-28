<!-- Formulario -->    
<br>
<form class="container" method="POST" action="<?php echo base_url('Persona/update2'); ?>">
    
    <?php foreach ($datosUsuario as $value) {     ?>
            
    <div class="form-group">
        <input type="hidden" name="txtCedulaVieja" class="form-control" id="CedulaVieja" value="<?php echo $value->cedula; ?>">        
    </div>
    <div class="form-group">
        <label for="CedulaNueva">Cedula</label>
        <input type="text" name="txtCedulaNueva" class="form-control" id="CedulaNueva" value="<?php echo $value->cedula; ?>">        
    </div>
    <div class="form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" name="txtNombre" class="form-control" id="Nombre" value="<?php echo $value->nombre; ?>">
    </div>
    <div class="form-group">
        <label for="Apellido">Apellido</label>
        <input type="text" name="txtApellido" class="form-control" id="Apellido" value="<?php echo $value->apellido; ?>">
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="Email" name="txtEmail" class="form-control" id="Email" value="<?php echo $value->email; ?>">
    </div>

    <?php } ?>

    <button type="submit" class="btn btn-default">Actualizar persona</button>
</form>



<!-- <?php

print_r($datosUsuario);


?> -->