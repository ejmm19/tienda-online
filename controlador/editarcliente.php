<div class="col-md-4">
		<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Editar perfil de 
<?php
include"./php/conexion.php";
	
	$consulta = "SELECT * FROM clientes WHERE username = 'maria06'";
	$cl = mysql_query($consulta);
	$row = mysql_fetch_array($cl);
	echo $row['nombres'];

 ?></h3>
  </div>
  <div class="panel-body">
    <input type="text" value="<?php echo $row['username']; ?>"> 
  </div>
  <div class="panel-body">
    <input type="text" value="<?php echo $row['nombres']; ?>"> 
  </div>
  <div class="panel-body">
    <input type="text" value="<?php echo $row['apellidos']; ?>"> 
  </div>
  <a href="./controlador/editarcliente.php?id=<?php echo $row['id'] ?>" role="sumbit" class="btn btn-primary">Editar</a>  
  <br><br>
</div>
		
	</div>