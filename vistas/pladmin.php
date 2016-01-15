<br>
<br>
<br>
<br>
<div class="row">
    <div class="col-md-4"> 
   </div>
    <div class="col-md-4">
       
        <div class="col-md-12">
                  <table class="table table-striped table-hover ">
                                          <thead>
                                        <tr>
                                          <th>Nombre</th>
                                          <th>Valor</th>
                                          <th>Opciones</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        
                            
                                             <?php 
                                            include'./modelo/consultas.php';
                                            $objet=new Consultasbd;
                                            $objet->ListarPlanes();

            
                                                   
                                         ?> 
                                         </tbody>
                                        </table>
        </div>
    </div>
    <div class="col-md-4"></div>
   
  </div>

