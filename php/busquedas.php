<?php
           
                
                

                if (isset($_POST['bmarca'])) {
                  $consulta = "SELECT * FROM equipo ";
                  $cliente_editar = mysql_query($consulta);
                  while ($row = mysql_fetch_object($cliente_editar)) {
                  
               
                  echo "<div class='col-md-6'>
                  <div class='thumbnail'>
                  <img alt='Bootstrap Thumbnail Second' width='50%' src='./imagenes/".$row->img."' />
                  <div class='caption'>
                    <h3>
                      ".$row->marca."
                    </h3>
                    <p>
                      <a class='btn btn-success' href='#'>Pedir</a> <a class='btn' href='#'>Ver Planes</a>
                    </p>
                  </div>
                </div>  
              </div>"; }
                }
                
                          
            
            ?>