
<div class="col-md-12">
	<center><b><h3>Registrar Usuario Nuevo</h3></b></center>
	<form action="" method="post" class="form-signin col-md-12" role="form">  
                                  
                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Usuario:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" name="usuario" class="form-control" placeholder="Ingrese su Usuario" required><br/>
                                  </div>
                                  
                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Contraseña:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" placeholder="Ingrese su Contraseña" required><br/>
                                  </div>

                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Nombre:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre" required><br/>
                                  </div>

                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Apellidos:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" name="apellidos" class="form-control" placeholder="Ingrese su Apellido" required><br/>
                                  </div>
                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Edad:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" name="edad" class="form-control" placeholder="Ingrese su Apellido" required><br/>
                                  </div>  
                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Correo:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" name="correo" class="form-control" placeholder="Ingrese su Apellido" required><br/>
                                  </div>  
                                  <div class="col-md-3">
                                    <h4 class="ingrese" for="">Documento:</h4 class="ingrese">
                                  </div>
                                  <div class="col-md-9">
                                    <input type="text" name="documento" class="form-control" placeholder="Ingrese su Apellido" required><br/>
                                  </div>                       
                                    <a href="index.php" class="btn btn-primary">Atrás</a>
                                    <button class="btn btn-primary" type="submit" name="registrar">Registrar</button>
                                  <br>
                                  
                          </form>
                          <?php if (isset($_POST['registrar'])){
                          	include'./controlador/Cregistro.php';
                          }


                           ?>
                          	

							
</div>
