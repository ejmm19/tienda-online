<?php include"./php/conexion.php";
	$usuario = $_SESSION['sess_username'];
	$consulta = "SELECT * FROM clientes WHERE username = '$usuario'";
	$cl = mysql_query($consulta);
	$row = mysql_fetch_array($cl); ?>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Perfil de <?php echo $row['username']; ?></h3>
  </div> 
<?php
if (!isset($_POST['edit'])) {
	echo "
 
		<br><br>
		<div class='form-group'>
      <label class='col-lg-4 control-label'>Nombres</label>
      <div class='col-lg-8'>
        <p>".$row['nombres']."</p>
      </div>
    </div>
    <br><br>
		<div class='form-group'>
      <label class='col-lg-4 control-label'>Apellidos</label>
      <div class='col-lg-8'>
        <p>".$row['apellidos']."</p>
      </div>
    </div>
    <br><br>
		<div class='form-group'>
      <label class='col-lg-4 control-label'>Correo</label>
      <div class='col-lg-8'>
        <p>".$row['correo']."</p>
      </div>
    </div>

    <br><br><br>
    
    <br><br>
    ";
}else{
	echo "
	<form action='' method='post' >
		<br><br>
		<div class='form-group'>
      <label for='inputEmail' class='col-lg-4 control-label'>Nombres</label>
      <div class='col-lg-8'>
        <input type='text' class='form-control' name='nombres' value=".$row['nombres'].">
      </div>
    </div>
    <br><br><div class='form-group'>
      <label for='inputEmail' class='col-lg-4 control-label'>Apellidos</label>
      <div class='col-lg-8'>
        <input type='text' class='form-control' name='apellidos' value=".$row['apellidos'].">
      </div>
    </div>
    <br><br><div class='form-group'>
      <label for='inputEmail' class='col-lg-4 control-label'>Correo</label>
      <div class='col-lg-8'>
        <input type='text' class='form-control' name='correo' value=".$row['correo'].">
      </div>
    </div><br><br><br>
    <input type='submit' value='cambiar' class='btn btn-warning' name='editar'>
    <br><br>
    </form>
    
    ";
}if (isset($_POST['editar'])) {
		$nombres=$_POST['nombres'];
		$apellidos=$_POST['apellidos'];
		$correo=$_POST['correo'];
		
		$sql="UPDATE clientes SET nombres='$nombres', 
		apellidos='$apellidos',correo='$correo' WHERE username='$row[username]'";
		mysql_query($sql);
		echo "<script>alert('Datos Guardados con exito Actualize la Pagina Para Ver Cambios')</script>";
	}
?>
</div>
<form action="" method="post">
	<input type="submit" name="edit" value="Editar" class="btn btn-primary">
</form>
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Imagen de Perfil</h3>
  </div>
  <div class="panel-body">
    <img src="<?php echo $row['img'];?>" width="57%" >
    
    <br><br><br>

    <form role="form" action="" method="post" enctype="multipart/form-data">
				<div class="form-group">					 
					
					<input type="file" id="exampleInputFile" name="imagen" />
					<p class="help-block">
						Seleccione su imagen de perfil.
						<p style="color:green;"><b>Nota:</b>  El archivo no debe sobrepasar los 100kb de peso</p>
					</p>
				</div>
				<button type="submit" name="enviar" class="btn btn-success">
					Cambiar
				</button>
	</form>
	<?php 
	
include'./modelo/consultas.php';
    $ob = new Consultasbd;
	if (isset($_POST['enviar'])) {
		
		$ob->Subirfoto($_SESSION['sess_username'],'clientes',$_FILES["imagen"]);
		echo "<script>alert('Imagen cambiada Con Exito')</sctipt>";
		}


 ?>


	
  </div>
</div>
	</div>
	<div class="col-md-4">
   <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Lista de compras</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Equipo</th>
      <th>Plan</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
      $ob->mostrarCompra('venta',$row['id']);
     ?>
   
  </tbody>
</table> 

  </div>
</div>

  </div>
</div>