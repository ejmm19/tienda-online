
<div class="row" style="margin-right: 91px; margin-top: 112px; margin-left: 91px;border-radius: 6px;">
	
		<?php 
		include'./modelo/consultas.php';
		$objeto=new Consultasbd;
			if (!isset($_GET['edit'])) {
				echo "
					<div class='col-md-3' style='background:rgba(63, 177, 232, 0.15);'>
					<br>
					<br>
					<br>
		<center><h4>Ingresar Equipos</h4></center>
				<form role='form' action=' method='post' enctype='multipart/form-data'>
				<div class='form-group'>
					 
					<label for='exampleInputEmail1'>
						Modelo
					</label>
					<input type='text' class='form-control' name='modelo' />
				</div>
				<div class='form-group'>
					 
					<label for='exampleInputPassword1'>
						Accesorios
					</label>
					<input type='text' class='form-control' name='accesorios' />
				</div>
				<div class='form-group'>
					 
					<label for='exampleInputPassword1'>
						Marca
					</label>
					<input type='text' class='form-control' name='marca' />
				</div>
				<div class='form-group'>
					 
					<label for='exampleInputPassword1'>
						Color
					</label>
					<input type='text' class='form-control' name='color' />
				</div>
				<div class='form-group'>
					 
					<label for='exampleInputPassword1'>
						Generación
					</label>
					<input type='text' class='form-control' name='generacion' />
				</div>
				<div class='form-group'>
					 
					<label for='exampleInputPassword1'>
						Sistema Operativo
					</label>
					<input type='text' class='form-control' name='so' />
				</div>
				<div class='form-group'>
					 
					<label for='exampleInputPassword1'>
						Precio
					</label>
					<input type='number' class='form-control' name='precio' />
				</div>

				<div class='form-group'>
					 
					<label for='exampleInputFile'>
						Imagen
					</label>
					<input type='file' id='exampleInputFile' name='img' />
					<p class='help-block'>
						Selecciona una la imagen correspondientes a celular
					</p>
				</div>
				
				<button type='submit' class='btn btn-default' name='registrar'>
					Registrar
				</button>
			</form>";
			}else{
				$objeto->editarCel($_GET['edit']);
			}

		 
			
			
				if (isset($_POST['registrar'])) {
					$objeto->insertarEquipos($_POST['modelo'],$_POST['accesorios'],$_POST['marca'],$_POST['color']
					,$_POST['generacion'],$_POST['so'],$_POST['precio'],$_FILES['img']['name']);
				}
				if (isset($_POST['actualizar'])) {
					$objeto->editarEquipos($_POST['modelo'],$_POST['accesorios'],$_POST['marca'],$_POST['color']
					,$_POST['generacion'],$_POST['so'],$_POST['precio'],$_GET['edit']);
				}

			 ?>
		
			<br>
			<br>
			<br>
			<br>
			</div>
			<div class="col-md-9">
				<table class="table table-striped table-hover ">
									  <thead>
									    <tr>
									      <th>id</th>
									      <th>Modelo</th>
									      <th>Accesorios</th>
									      <th>Marca</th>
									      <th>Color</th>
									      <th>Generación</th>
									      <th>SO</th>
									      <th>Precio</th>
									      <th>Opciones</th>
									    </tr>
									  </thead>
									  <tbody>
									    <tr>
									    <?php 
									    						    	
									    	$objeto->Listarcel2();

											
									     ?>	
									    </tr> </tbody>
		</table>
			</div>
		</div>
