
    <?php
        echo validation_errors();
    ?>
    <h1>CRUD DE PARCIAL 2</h1>


    <div class="container">


            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">

            <!-- tab de consulta -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
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
                </div>

                <!-- tab de formulario -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                

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
                




                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>

       

    </div>
