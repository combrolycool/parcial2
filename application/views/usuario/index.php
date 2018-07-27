
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        echo validation_errors();
    ?>
    <h1>CRUD DE PARCIAL 2</h1>


    <div class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#Consulta" aria-controls="Consulta" role="tab" data-toggle="tab">Consulta</a></li>
            <li role="presentation"><a href="#Registro" aria-controls="Registro" role="tab" data-toggle="tab">Registro</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
        </ul>


        <!-- Tab panes -->
        <div class="tab-content">

            <!-- Consulta -->
            <div role="tabpanel" class="tab-pane active" id="Consulta">
                <br>
                <!-- <?php print_r($AllPerson); ?>   -->
                <table class ="table table-hover">
                    <thead>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php foreach($AllPerson as $person){ ?>
                            <tr>
                                <td><?php echo $person['cedula']; ?></td>
                                <td><?php echo $person['nombre']; ?></td>
                                <td><?php echo $person['apellido']; ?></td>
                                <td><?php echo $person['email']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Persona/update')."/".$person['cedula']; ?>" tittle="editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true">Editar</span></a>
                                    <a href="<?php echo base_url('Persona/delete')."/".$person['cedula']; ?>" tittle="eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true">Eliminar</span></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            
            </div>


             
            <div role="tabpanel" class="tab-pane" id="Registro">
                
                <!-- Formulario -->    
                <br>
                <form class="container" method="POST" action="<?php echo base_url('Persona/insert'); ?>">
                    <div class="form-group">
                        <label for="Cedula">Cedula</label>
                        <input type="text" name="txtCedula" class="form-control" id="Cedula">
                    </div>
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="txtNombre" class="form-control" id="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="Apellido">Apellido</label>
                        <input type="text" name="txtApellido" class="form-control" id="Apellido">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="Email" name="txtEmail" class="form-control" id="Email">
                    </div>
                    <button type="submit" class="btn btn-default">Agregar</button>
                </form>                        

            
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">..3.</div>
            <div role="tabpanel" class="tab-pane" id="settings">..4.</div>
        </div>

    </div>

</body>
</html>