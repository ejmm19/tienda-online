<div class="row">
    <div class="col-md-12">
      <div class="row">
        
          
            <?php
            if (isset($_POST['pedir'])) {
              require '../php/conexion.php';
                $consulta = "SELECT * FROM equipo";
                $cliente_editar = mysql_query($consulta);
                

                while ($row = mysql_fetch_object($cliente_editar)) {
                  
               
            echo "<div class='col-md-4'>
            <div class='thumbnail'>
            <img alt='Bootstrap Thumbnail Second' width='50%' src='./imagenes/".$row->img."' />
            <div class='caption'>
              <h3>
                ".$row->marca."
              </h3>
              <p>
                ".$row->color."
              </p>
              <p>
              <form action='transaccion.php'>
                <a class='btn btn-success' href='#'>Pedir</a> <a class='btn' href='#'>Ver Planes</a>
              </form>
              </p>

            </div>
          </div>  
        </div>"; }
            }
                
                          
            
            ?>
        
      </div>

     
       </div>
    </div>