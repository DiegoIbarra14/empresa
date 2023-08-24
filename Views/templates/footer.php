
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">TEXTIL ANAHUI</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Jersey</a></li>
                        <li><a class="text-decoration-none" href="#">French Terry</a></li>
                        <li><a class="text-decoration-none" href="#">Rib</a></li>
                        <li><a class="text-decoration-none" href="#">Interfil</a></li>
                        
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Company Name 
                            | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div id="modallogin" class="modal fade z-index-master " role="dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered  text-white">
          <div class="modal-content">
                <div class="modal-header bg-dark">
                  <h5 class="modal-title">Iniciar Sesion</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
                </div>
                <div class="modal-body">
                  <form action="get">
                    <div class="text-center">
                        <img class="img-thumbail " src="<?php echo BASE_URL."/assets/assets/images/LOGUITO.PNG" ?>" width="100" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="formlogin">
                            <div class="form-group text-dark mb-3">
                                <label  for="correoLogin"><i class="fa-sharp fa-solid fa-user"></i> Correo Usuario</label>
                                <input id="correoLogin" class="form-control" type="email" placeholder="Correo Electronico">
                            </div>
                            <div class="form-group text-dark mb-3">
                                <label for="contraLogin"><i class="fas fa-key"></i>Contraseña</label>
                                <input id ="contraLogin" class="form-control" type="password" placeholder="Password">
                            </div>
                            <a href="#" id="btn-register" class="text-decoration-none">Todavia no tienes una cuenta?</a>
                            <div class="float-end">
                                <button class="btn btn-primary" id="login" type="button">Login</button>
                       
                            </div>


                        </div>
                        <!-- Formulario de Registro -->
                        <div class="col-md-12  d-none" id="formregister">
                            <div class="form-group text-dark mb-3">
                                <label  for="nombreRegistro"><i class="fa-sharp fa-solid fa-user"></i>Nombres</label>
                                <input id="nombreRegistro" class="form-control" name="nombreRegistro" type="text" placeholder="Nombres">
                            </div>
                            <div class="form-group text-dark mb-3">
                                <label for="apellidosRegistro"><i class="fa-sharp fa-solid fa-user"></i> Apellidos</label>
                                <input id ="apellidosRegistro" class="form-control" name="apellidoRegistro" type="text" placeholder="Apellidos">
                            </div>
                            <div class="form-group text-dark mb-3">
                                <label for="correoRegistro"><i class="fa-regular fa-envelope"></i> Correo</label>
                                <input id ="correoRegistro" class="form-control" name="correoRegistro" type="text" placeholder="Correo Electronico">
                            </div>
                            <div class="form-group text-dark mb-3">
                                <label for="contraRegistro"><i class="fas fa-key"></i> Contraseña</label>
                                <input id ="contraRegistro" class="form-control" name="contraRegistro" type="text" placeholder="Password">
                            </div>
                            <a href="#" id="btn-login" class="text-decoration-none">Ya tienes una cuenta?</a>
                            <div class="float-end">
                                
                                <button class="btn btn-danger" type="button" id="registrarse">Registrarse</button>
                            </div>  
                            


                        </div>


                        
                    </div>
                    
                    
                    
                  </form>
                </div>
                
          </div>
        </div>
    </div>
    <!-- VENTANA MODAL DE CARRITO -->
    <div id="myModal"class="modal modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="fa fa-fw fa-cart-arrow-down text-white mr-1"></i> Carrito</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                </div>
                <div class="modal-body">
                     <table class="table table-bordered table-striped table-hover">
                            <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Producto</th>
                                   <th>Precio</th>
                                   <th>Cantidad</th>
                                   <th>Subtototal</th>
                                   <th></th>
                                   
                                </tr>

                           </thead>
                           <tbody id="modal-product">
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>
                               <td></td>


                           </tbody>
                     </table>
                        
                     
                </div>

                <div class="modal-footer">
                    <h3 class="h3" id="modal-total"></h3>
                </div>
            </div>
        </div>
    </div>


  

<!-- Button Whatsapp Structure -->
<div class="whatsapp_chat_support wcs_fixed_right" id="button-w">
<div class="wcs_button_label">
        Contáctanos
    </div>  
<div class="wcs_button wcs_button_circle">
    <span class="fa fa-whatsapp"></span>
</div>  

<div class="wcs_popup">
    <div class="wcs_popup_close">
        <span class="fa fa-close"></span>
    </div>
    <div class="wcs_popup_header">
        <span class="fa fa-whatsapp"></span>
        <strong>Servicio al cliente</strong>
        
        <div class="wcs_popup_header_description">¿Necesidad de ayuda? Chatea con nosotros en Whatsapp</div>

    </div>  
    <div class="wcs_popup_input" 
        data-number="951952357"
        data-availability='{ "monday":"07:00-22:30", "tuesday":"07:00-22:30", "wednesday":"07:7030-22:30", "thursday":"07:00-22:30", "friday":"07:00-22:30", "saturday":"09:00-18:30", "sunday":"09:00-22:30" }'>
        <input type="text" placeholder="Escribir pregunta!" />
        <i class="fa fa-play"></i>
    </div>
    <div class="wcs_popup_avatar">
        <img src="assets/images/log.png" alt="">
    </div>
</div>



<!-- jQuery 1.8+ -->

<script src=<?php echo BASE_URL.'assets/js/jquery-1.11.0.min.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/jquery-migrate-1.2.1.min.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/bootstrap.bundle.min.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/templatemo.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/templatemo.min.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/custom.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/config-slider.js'?>></script>
<script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
<script src="<?php echo BASE_URL.'assets/js/video.js'?>"></script>
<script src="<?php echo BASE_URL.'assets/js/scroll-config.js'?>"></script>
<script preconected src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script src=<?php echo BASE_URL.'assets/js/config-slider.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/app.js'?>></script>

<script src=<?php echo BASE_URL.'assets/js/login.js'?>></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src=<?php echo BASE_URL.'assets/js/slick.min.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/script.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/detail.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/carrito.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/lista-productos.js'?>></script>
<script src=<?php echo BASE_URL.'assets/js/products.js'?>></script>
<!-- Plugin JS file -->
<script src=<?php echo BASE_URL.'assets/plugin/components/moment/moment.min.js'?>></script>
<script src=<?php echo BASE_URL.'assets/plugin/components/moment/moment-timezone-with-data.min.js'?>></script>
<script src=<?php echo BASE_URL.'assets/plugin/whatsapp-chat-support.js'?>></script>

				
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
<script>
$('#button-w').whatsappChatSupport({
    defaultMsg : '',
});
</script>
<script>
    
    AOS.init({
        once:true
    });

</script> 



</body>
</html>