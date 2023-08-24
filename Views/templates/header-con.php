<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bb116aa166.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="plugin/components/Font Awesome/css/font-awesome.min.css">
    
    
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,600;1,800&family=Oswald&family=Playfair+Display:ital,wght@1,700&family=Work+Sans:ital@1&display=swap" rel="stylesheet">
    <link
        href="https://unpkg.com/video.js@7/dist/video-js.min.css"
        rel="stylesheet"
    />

<!-- City -->
    <link
      href="https://unpkg.com/@videojs/themes@1/dist/forest/index.css"
      rel="stylesheet"
    />

<!-- Then, in the player -->

    <link rel="stylesheet" href=<?php echo BASE_URL."assets/plugin/components/Font Awesome/css/font-awesome.min.css"?>>
    <link rel="stylesheet" href=<?php echo BASE_URL."assets/plugin/whatsapp-chat-support.css"?>>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href=<?php echo BASE_URL."assets/css/fontawesome.min.css"?>>
    <link rel="stylesheet" href=<?php echo BASE_URL."assets/css/header-n.css"?>>
    
    <link rel="stylesheet" href="sweetalert2.min.css">
    
    
    <link rel="stylesheet" href=<?php echo BASE_URL."assets/css/footer.css"?>>
    <link rel="stylesheet" href=<?php echo BASE_URL."assets/css/bootstrap.min.css"?>>
    <link rel="stylesheet" href=<?php echo BASE_URL."assets/css/templatemo.css"?>>
    <link rel="stylesheet" href=<?php echo BASE_URL."assets/css/custom.css"?>>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href=<?php echo BASE_URL."assets/css/contacto.css"?>>
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID?>&currency=USD"></script>
   
    
    
   
    <link rel="stylesheet" href=<?php echo BASE_URL."assets/css/style.css"?>>
    
    <link rel="stylesheet" href=<?php echo BASE_URL."assets/plugin/components/Font Awesome/css/font-awesome.min.css"?>>

    
    <title>Tienda</title>
</head>
<body>
    <!-- Header -->
    <!-- Start Top Nav -->
    <div class="content-nav">
        <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
            <div class="container text-light">
                <div class="w-100 d-flex justify-content-between">
                    <div>
                        <i class="fa fa-envelope mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        <i class="fa fa-phone mx-2"></i>
                        <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                    </div>
                    <div>
                        <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                        <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                        <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                        <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Close Top Nav -->


        <!-- Header -->
        <nav id="nav"  class="navbar navbar-expand-lg navbar-light shadow">
            <div class="container d-flex justify-content-between align-items-center">

                <a id="content-logo" class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                    <img src="<?php echo BASE_URL."/assets/assets/images/LOGUITO.PNG" ?>" alt="">
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                    <div class="flex-fill">
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo BASE_URL?>">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/trabajo/principal/nosotros">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/trabajo/productos">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/trabajo/principal/contacto">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div id="nav-left" class="navbar align-self-center d-flex">
                        <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                            <div class="input-group">
                                <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                                <div class="input-group-text">
                                    <i class="fa fa-fw fa-search"></i>
                                </div>
                            </div>
                        </div>
                        <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                            <i class="fa fa-fw fa-search text-dark mr-2"></i>
                        </a>
                        <a id="carrito" class="nav-icon position-relative text-decoration-none" href="#">
                            <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                            <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark" id="cantidadCarrito"></span>
                        </a>
                            <?php if (empty($_SESSION['correoCliente'])) {?>
                                <a class="nav-icon position-relative text-decoration-none" href="#" id="user">
                                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                                </a>
                            <?php } else {?>
                                <a class="nav-icon position-relative text-decoration-none" href="<?php echo BASE_URL."clientes"?>" >
                                    <img height="20" src="<?php echo BASE_URL.'assets/img/default.png'?>" alt="">
                                </a>
                                
                            <?php }?>
                    </div>
                </div>

            </div>
        </nav>
  


    </div>
    