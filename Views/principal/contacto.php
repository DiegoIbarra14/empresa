<?php
include_once("./Views/templates/header-con.php")
?>
<body>

    <div class="global">
       
    </div> 
    <div class="global-conainer">
        <section class="section-actual">
            <div class="content-section-actual">
              <div class="window-section"></div>
              
                <!-- <div class="section-actual-links"><a href="#">Home</a><span>></span><a href="">Nosotros</a></div> -->
                <div class="section-actual-title"><h3>CONTACTO</h3></div>

            </div>
            
        </section>
        <section class="contac-cards">
            <div class="section-cards-contact">
                <div class="card-contact-item">

                    <div class="content-card">
                        <div class="card">
                            <div class="content-icon"><img src="assets/icons/location.svg" alt=""></div>
                            <div class="content-text">
                                <div class="texti">
                                    <h5>DIRECCION</h5>
                                    <div class="text">
                                        <p><span>Planta:</span>Jr Italia 1148</p>
                                        <p><span>Tienda:</span>Galeria 2001 4to piso</p>
                                    </div>
                                        
                                </div>
                                
                        </div>

                        </div>
                        

                    </div>
                    

                </div>
                <div class="card-contact-item">
                    <div class="content-card">
                        <div class="card">
                            <div class="content-icon"><img src="assets/icons/phone.svg" alt=""></div>
                                <div class="content-text">
                                    <div class="texti">
                                        <h5>TELÉFONO</h5>
                                        <div class="text">
                                            <span>Central de Atención</span>
                                            <p><span>+511 </span>325 0295</p>
                                        </div>

                                    </div>

                            </div>

                        </div>
                        

                    </div>
                    
                    

                </div>
                <div class="card-contact-item">
                    <div class="content-card">
                        <div class="card">
                            <div class="content-icon"><img src="assets/icons/tiempo.svg" alt=""></div>
                            <div class="content-text">
                                <div class="texti">
                                    <h5>Atencion</h5>
                                    <div class="text">
                                        <p>Lun:7am - Vier:6pm</p>
                                        <p>Sába:09.am - 01.pm</p>
                                    </div>

                                </div>
                                
                            </div>

                        </div>
                        

                    </div>
                    

                </div>

            </div>


        </section>
        <section class="formulario-contact">
        <div class="containers">
      
      <img src="img/shape.png" class="square" alt="" />
      <div class="formi">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="assets/images/location.png" class="icon" alt="" />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="assets/images/email.png" class="icon" alt="" />
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information">
              <img src="assets/images/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

       
        
    </div>
    <?php
    include_once("./Views/templates/footer.php")
    ?>
