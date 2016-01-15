
<div class="row" style="margin-top:10%;">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<table class="table table-striped table-hover ">
                                          <thead>
                                        <tr>
                                          <th>Cliente</th>
                                          <th>Equipo</th>
                                          <th>plan</th>
                                          <th>Opciones</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        
                            
                                             <?php 
                                            include'./modelo/consultas.php';
                                            $objet=new Consultasbd;
                                            $objet->mostrarventas();

            
                                                   
                                         ?> 
                                         </tbody>
                                        </table>

	</div>
	<div class="col-md-4">
		<?php 
		if (isset($_GET['ve'])) {
			$id=$_GET['ve'];
			$sq=mysql_query("DELETE FROM venta WHERE id= '$id'");
			header('location: adminhome.php?op=5');
		}

		 ?>
	</div>
</div>