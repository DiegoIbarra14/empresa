

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href='<?php echo BASE_URL."assets/vendor/fontawesome-free/css/all.min.css"?>' rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo BASE_URL."/assets/css/sb-admin-2.min.css"?>" rel="stylesheet">
    <style>
        body{
            display: flex!important;
            align-items: center!important;
            height: 100vh!important;
            
        }
        .log{
            height: 500px;
        }

       
    </style>

</head>

<body class="bg-gradient-primary  d-flex justify-content-center">

    <div class="container ">

        <!-- Outer Row -->
        <div class="row  d-flex justify-content-center  ">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row log  ">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6 d-flex flex-column justify-content-center">
                                <div class="p-5 ">
                                    <div class="text-center">
                                        <h1 class="h1 text-gray-900 mb-4">Bienvenido</h1>
                                    </div>
                                    <form id="formulario" class="user">
                                        <div class="form-group">
                                            <input type="email" name="correo"class="form-control form-control-user"
                                                id="correo" aria-describedby="emailHelp"
                                                placeholder="Ingrese Correo...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="clave" class="form-control form-control-user"
                                                id="contrasena" placeholder="Ingresar password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordar Contraseña
                                                    </label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Iniciar Sesion">
                                           
                                        </a>
                                        
                                        
                                    </form>
                                    
                                    <div class="text-center py-2">
                                        <a class="small" href="forgot-password.html">Olvidaste tu Contraseña</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo BASE_URL."assets/vendor/jquery/jquery.min.js"?>"></script>
    <script src="<?php echo BASE_URL."assets/vendor/bootstrap/js/bootstrap.bundle.min.js"?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo BASE_URL."assets/vendor/jquery-easing/jquery.easing.min.js"?>"></script>

    <!-- Custom scripts for all pages-->
    <script>
        const base_url='<?php echo BASE_URL?>';
    </script>
    <script src="<?php echo BASE_URL."assets/js/sb-admin-2.min.js"?>"></script>
    <script src="<?php echo BASE_URL."assets/js/admin.js"?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>