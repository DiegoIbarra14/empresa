<?php
include_once("./Views/templates/cli-header.php")
?>

<div class="container my-4 container-table ">
        <div class="row">
          <?php
          if($data['verificar']['verify']==0){?> 

            <div class=" h4 alert alert-danger  text-center my-5 py-5" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div>
                  VERIFICAR CORREO
                </div>
            </div> 
          <?php }else{?>
        
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                      <div class="table-responsive">
                      <table class="table table-borderer table-striped ">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>SubTotal</th>
                                    

                                </tr>
                            </thead>
                            <tbody id="tableListaProductos">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>

                        </table>
                      </div>
                        
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                      <h3 id='totalProducto' class="h3"></h3>
                    </div>   
                  </div>
            </div>
          
        
            <div class="col-md-4">
                <div class="card shadow-lg ">
                  <div class="dropdown">
                    <a class="nav-link dropdown-toggle float-end text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-user"></i>
                    </a>

                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?php echo BASE_URL.'clientes/salir'?>"><i class="fas fa-times-circle"></i>Cerrar Session</a></li>
                      
                    </ul>
                </div>
                    <div class="card-body text-center">
                        <img width="100px" class="img-thumbnail rounded-circle " src="<?php echo BASE_URL."/assets/assets/images/LOGUITO.PNG" ?>" alt="">
                        <hr>
                        <p class="h5"><?php echo $_SESSION['nombreCliente']?></p>
                        <p><i class="fas fa-envelope"></i> <?php echo $_SESSION['correoCliente']?></p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Paypal
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  <div id="paypal-button-container"></div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Otros
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  
                                </div>
                              </div>
                            </div>
                           
                            </div>
                        </div>
                        
                    
                        
                    </div>
                </div>
                <?php }?></div>
        </div>
 </div>
<?php
include_once("./Views/templates/footer.php")
?>
    