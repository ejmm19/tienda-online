<div class="row">
    <div class="col-md-8">
        <?php 
            
				include'./modelo/consultas.php';
				$obj=new Consultasbd;

            if (!isset($_GET['idcel'])) {
            	$obj->ListarCel();
            }else{
            $obj->pedirCel('equipo','id_equipo',$_GET['idcel']);
            
           
         ?>    
  </div>
  <div class="col-md-4">
      <?php $obj->mostrarValor($_GET['idcel']);
        }?>
  </div>
       
       <?php 
        if (isset($_GET['pedircel'])) {
            $sq=mysql_query("SELECT * FROM clientes WHERE username='$_SESSION[sess_username]'");
            $resulatd=mysql_fetch_object($sq);
            $obj->ingresarVenta($resulatd->id,$_GET['pedircel'],$_GET['idplan']);
        }

         ?>
       
</div>
  