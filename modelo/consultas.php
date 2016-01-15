<?php /**
* 
*/
include'./php/conexion.php';
class Consultasbd 
{
	public function registroBaseDatos($nom,$ape,$edad,$correo,$doc,$pass,$rol,$usu){
		mysql_query("INSERT INTO clientes (id,nombres, apellidos, edad, correo, documento,password, role, username,img)
			  VALUES ('','$nom','$ape','$edad','$correo','$doc','$pass','$rol','$usu','')");
	}
	public function consultaSelectlistar($tabla,$celda){
		$busqueda=mysql_query("SELECT * FROM $tabla ");
        while ($muestra=mysql_fetch_object($busqueda)) {  
        echo "<option value='".$muestra->$celda."'>".$muestra->$celda;
                    
            }
	}
	public function convertirCliente($id){
			$sql=mysql_query("SELECT * FROM clientes WHERE id='$id'");
			$rq=mysql_fetch_object($sql);
			return $rq->username;
	}
	public function convertirEqui($id){
			$sql=mysql_query("SELECT * FROM equipo WHERE id_equipo='$id'");
			$rq=mysql_fetch_object($sql);
			return $rq->modelo;
	}
	public function convertirPlan($id){
			$sql=mysql_query("SELECT * FROM plan WHERE id_plan='$id'");
			$rq=mysql_fetch_object($sql);
			return $rq->nombre;
	}
	public function insertarEquipos($celd1,$celd2,$celd3,$celd4,$celd5,$celd6,$celd7,$celd8){

			if ($_FILES["img"]["error"] > 0){
					echo "ha ocurrido un error";
						} else {
					
					$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
					$limite_kb = 100;

					if (in_array($_FILES['img']['type'], $permitidos) && $_FILES['img']['size'] <= $limite_kb * 1024){
						
						$ruta = "./imagenes/" . $_FILES['img']['name'];
						
						if (!file_exists($ruta)){
							
							$resultado = @move_uploaded_file($_FILES["img"]["tmp_name"], $ruta);
							if ($resultado){
								echo "<div class='alert alert-dismissible alert-success'>
										  <button type='button' class='close' data-dismiss='alert'>X</button>
										  <strong></strong> Su img de Perfil Ha sido Cambiada con Exito
										</div>";
													

							mysql_query("INSERT INTO equipo (id_equipo, modelo, accesorios, marca, color, generacion, sistemaoperativo,precio, img)
							VALUES ('','$celd1','$celd2','$celd3','$celd4','$celd5','$celd6','$celd7','$celd8')");
							echo "<script>alert('Datos Enviados con Exito')</script>";

							} else {
								echo "ocurrio un error al mover el archivo.";
							}
						} else {
							echo $_FILES['img']['name'] . ", este archivo existe";
						}
					} else {
						echo "<script>alert('El Archivo supera los 100kb, Intenta con otra, debes tenerla por ahi en tu pc, no se busca no seas flojo!!!');</script>";
						
					}
				}	

			
	}
	
	public function consultaSelectcatalogo($tabla,$celda1,$celda2,$post,$celbusq){
				 $sql=mysql_query("SELECT * FROM $tabla WHERE $celbusq = '$post'");
                  while ($row=mysql_fetch_array($sql)) {        
                  echo "<div class='col-md-6'>
                  <div class='thumbnail'>
                  <img alt='Bootstrap Thumbnail Second' width='50%' src='./imagenes/".$row[$celda1]."' />
                  <div class='caption'>
                    <h3>
                      ".$row[$celda2]."
                    </h3>
                    <h4>".$post."</h4>
                    
                  </div>
                </div>  
              </div>"; }
                }
		    public function ListarCel(){	
						$sql=mysql_query("SELECT * FROM equipo");
		                  while ($row=mysql_fetch_array($sql)) {        
		                  echo "<div class='col-md-4'>
		                  <div class='thumbnail'>
		                  <img alt='Bootstrap Thumbnail Second' width='150px' src='./imagenes/".$row['img']."' />
		                  <div class='caption'>
		                    <h3>
		                      ".$row['modelo']."
		                    </h3>
		                    <h4>".$row['marca']."</h4>
		                    <p>
		                      <a class='btn btn-success' href='userhome.php?op=4&idcel=".$row['id_equipo']."'>Pedir</a> <a class='btn' href='planes.php?=op'>Ver Planes</a>
		                    </p>
		                  </div>
		                </div>  
		              </div>"; } 
          }
          public function Listarcel2(){
          			$sql=mysql_query("SELECT * FROM equipo");
		                  while ($row=mysql_fetch_array($sql)) {       
		                      echo "<tbody>
    							<tr class='success'>
							      <td>".$row['id_equipo']."</td>
							      <td>".$row['modelo']."</td>
							      <td>".$row['accesorios']."</td>
							      <td>".$row['marca']."</td>
							      <td>".$row['color']."</td>
							      <td>".$row['generacion']."</td>
							      <td>".$row['sistemaoperativo']."</td>
							      <td>".$row['precio']."</td>
							      <td><a href='adminhome.php?op=4&edit=".$row['id_equipo']."'><span class='glyphicon glyphicon glyphicon-edit' aria-hidden='true'></span></a>
							      &nbsp;&nbsp;&nbsp;&nbsp;<a href='php/eliminar.php?id=".$row['id_equipo']."'><span class='glyphicon glyphicon glyphicon-remove' style='color:red;'aria-hidden='true'></span></a>
							      </td>
							     					"; }	
							          }
          public function Subirfoto($un,$tab,$valor){
          
					
					if ($_FILES["imagen"]["error"] > 0){
					echo "ha ocurrido un error";
						} else {
					
					$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
					$limite_kb = 1000;

					if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
						
						$ruta = "./perfil/" . $_FILES['imagen']['name'];
						
						if (!file_exists($ruta)){
							
							$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
							if ($resultado){
								echo "<div class='alert alert-dismissible alert-success'>
										  <button type='button' class='close' data-dismiss='alert'>X</button>
										  <strong></strong> Su Imagen de Perfil Ha sido Cambiada con Exito
										</div>";
							$sql = "UPDATE clientes SET img = '$ruta' WHERE username = '$un'";
							mysql_query($sql);
							} else {
								echo "ocurrio un error al mover el archivo.";
							}
						} else {
							echo $_FILES['imagen']['name'] . ", este archivo existe";
						}
					} else {
						echo "<script>alert('El Archivo supera los 100kb, Intenta con otra, debes tenerla por ahi en tu pc, no se busca no seas flojo!!!');</script>";
						
					}
				}			          	
			}
			public function editarCel($edit){
				$sql=mysql_query("SELECT * FROM equipo WHERE id_equipo='$edit'");
				$re=mysql_fetch_object($sql);
				echo "
					<div class='col-md-3' style='background:rgba(15, 224, 61, 0.41);'>
					<br>
					<br>
					<br>
		<center><h4>Actualizar datos de Equipos</h4></center>
				<form role='form' action='' method='POST' enctype='multipart/form-data'>
				<div class='form-group has-success'>
					 
					<label for='exampleInputEmail1'>
						Modelo
					</label>
					<input type='text' class='form-control' name='modelo' value='".$re->modelo."'/>
				</div>
				<div class='form-group has-success'>
					 
					<label for='exampleInputPassword1'>
						Accesorios
					</label>
					<input type='text' class='form-control' name='accesorios' value='".$re->accesorios."'/>
				</div>
				<div class='form-group has-success'>
					 
					<label for='exampleInputPassword1'>
						Marca
					</label>
					<input type='text' class='form-control' name='marca' value='".$re->marca."'/>
				</div>
				<div class='form-group has-success'>
					 
					<label for='exampleInputPassword1'>
						Color
					</label>
					<input type='text' class='form-control' name='color' value='".$re->color."'/>
				</div>
				<div class='form-group has-success'>
					 
					<label for='exampleInputPassword1'>
						Generación
					</label>
					<input type='text' class='form-control' id='inputSuccess' name='generacion' value='".$re->generacion."'/>
				</div>
				<div class='form-group has-success'>
					 
					<label for='exampleInputPassword1'>
						Sistema Operativo
					</label>
					<input type='text' class='form-control' name='so' value='".$re->sistemaoperativo."'/>
				</div>
				<div class='form-group has-success'>
					 
					<label for='exampleInputPassword1'>
						Precio
					</label>
					<input type='number' class='form-control' name='precio' value='".$re->precio."'/>
				</div>

				
				
				<button type='submit' class='btn btn-success' name='actualizar'>
					Actualizar
				</button>
			</form>";
			}
			public function editarEquipos($celd1,$celd2,$celd3,$celd4,$celd5,$celd6,$celd7,$where){
							mysql_query("UPDATE equipo SET modelo='$celd1', accesorios='$celd2', marca='$celd3', color='$celd4',
							 generacion='$celd5', sistemaoperativo='$celd6',precio='$celd7' WHERE id_equipo='$where'");
							echo "<script>alert('Datos Registrados con Exito')</script>";
			
	}
	public function ListarPlan(){	
						$sql=mysql_query("SELECT * FROM plan");
		                  while ($row=mysql_fetch_array($sql)) {        
		                  echo "<div class='col-md-4'>
		                  <div class='thumbnail'>
		                  <img alt='Bootstrap Thumbnail Second' width='150px' src='./planes/".$row['img']."' />
		                  <div class='caption'>
		                    <h3>
		                      ".$row['nombre']."
		                    </h3>
		                    <p>
		                      <a class='btn btn-success'>".$row['precio']."</a> 
		                    </p>
		                  </div>
		                </div>  
		              </div>"; }
		          }
		          public function ListarPlanes(){
          			$sql=mysql_query("SELECT * FROM plan");
		                  while ($row=mysql_fetch_array($sql)) {       
		                      echo "
    							<tr class='success'>
							      <td>".$row['nombre']."</td>
							      <td>".$row['precio']."</td>
							      <td>&nbsp;&nbsp;&nbsp;&nbsp;<a href='php/eliminar.php?pl=".$row['id_plan']."'><span class='glyphicon glyphicon glyphicon-remove' style='color:red;'aria-hidden='true'></span></a>
							      </td>
							      </tr>"; 
							  }	
						}
					public function pedirCel($tabla,$id,$idwhere){
						$sql=mysql_query("SELECT * FROM $tabla WHERE $id = '$idwhere'");
						$ress=mysql_fetch_array($sql);
						echo "<center><div class='col-md-4'>
					                  <div class='thumbnail'>
					                  <img alt='Bootstrap Thumbnail Second' width='150px' src='./imagenes/".$ress['img']."' />
					                  <div class='caption'>
					                    <h3>
					                      ".$ress['modelo']."
					                    </h3>
					                    <p>
					                       
					                    </p>
					                  </div>
					                </div>  
					              </div>'</center>"; 
		}
		public function mostrarValor($idcel){
			$sql=mysql_query("SELECT * FROM plan");
			$sq=mysql_query("SELECT * FROM equipo WHERE id_equipo = '$idcel'");
			$resd=mysql_fetch_object($sq);
			while ($resultad=mysql_fetch_array($sql)) {
				echo "<div class='col-md-6'>
		                  <div class='thumbnail'>
		                  <img alt='Bootstrap Thumbnail Second' width='150px' src='./planes/".$resultad['img']."' />
		                  <div class='caption'>
		                    <h6>
		                      Plan:".$resultad['nombre']."
		                    </h6>
		                    <p>
		                      <a class='btn btn-primary' href='userhome.php?op=4&pedircel=".$resd->id_equipo."&idplan=".$resultad['id_plan']."'>".($resultad['precio']+$resd->precio)."</a> 
		                    </p>
		                  </div>
		                </div>  
		              </div>";
			}

		}
		public function ingresarVenta($idclient,$idequip,$idplan){
			$Sql=mysql_query("INSERT INTO venta (idcliente, idequipo, idplan) VALUES ('$idclient','$idequip',$idplan)");
			echo "<script>alert('Su pedido se ha registrado')</script>";
		}
		public function mostrarVentas(){
			$sql=mysql_query("SELECT * FROM venta");
			while ($r=mysql_fetch_object($sql)) {
				echo "
				<tr class='success'>
				 <td>".$this->convertirCliente($r->idcliente)."</td>
				 <td>".$this->convertirEqui($r->idequipo)."</td>
				 <td>".$this->convertirPlan($r->idplan)."</td>
				 <td><a href='adminhome.php?op=5&ve=".$r->id."'>Enviar</a>
				 
				 </td>
				</tr>	";
			}
		}
		public function mostrarCompra($tabla,$where){
			$sql=mysql_query("SELECT * FROM $tabla WHERE idcliente='$where'");
			$i=1;
			while ($resultado=mysql_fetch_object($sql)) {
				echo "<tr>
				      <td>".$i++."</td>
				      <td>".$this->convertirEqui($resultado->idequipo)."</td>
				      <td>".$this->convertirPlan($resultado->idplan)."</td>
				    </tr>";
			}
		}


}
?>