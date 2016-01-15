<br><br><h3><b>Busqueda</b></h3>

<div class="col-md-5">

<form class="form-horizontal" action="" method="post">
  <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Modelo</label>
      <div class="col-lg-8">
        <select name="modelo" class="form-control">
          <?php 
          include'./modelo/consultas.php';
          $objeto = new Consultasbd;
          $objeto->consultaSelectlistar('equipo','modelo');
           ?>
        </select>
      </div>
      
      <input type="submit" name="bmodelo" class="btn btn-primary" value="Buscar">
       </div>
</form>

 <form class="form-horizontal" action="" method="post">
  <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Marca</label>
      <div class="col-lg-8">
        <select class="form-control" id="select" name="marca">
          <?php

          $objeto->consultaSelectlistar('equipo','marca');
           ?>
        </select>
      </div>
      
      
      <input type="submit" name="bmarca" class="btn btn-primary" value="Buscar">
       </div>
</form>
<form action="" method="post">
 
  <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Sistema Operativo</label>
      <div class="col-lg-8">
        <select class="form-control" id="select" name="so">
          <?php

           $objeto->consultaSelectlistar('equipo','sistemaoperativo');
           ?>
        </select>
      </div>
      <input type="submit" name="bsistema" class="btn btn-primary" value="Buscar">
  </div>
</form>

</div>
<div class="col-md-7">
  <?php

              if (isset($_POST['bmodelo'])) {
              $objeto->consultaSelectcatalogo('equipo','img','marca',$_POST['modelo'],'modelo');

              }
              if (isset($_POST['bmarca'])) {
              $objeto->consultaSelectcatalogo('equipo','img','modelo',$_POST['marca'],'marca');
              }
              if (isset($_POST['bsistema'])) {
              $objeto->consultaSelectcatalogo('equipo','img','modelo',$_POST['so'],'sistemaoperativo');
              }

?>
</div>
