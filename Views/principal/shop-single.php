<?php
include_once("./Views/templates/cli-header.php")
?>
<section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid card-img-single" src="<?php echo BASE_URL."assets/img/telas/".$data['producto']['pro_id'].'/principal.jpg'?>" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid card-slide-img-single" src="<?php echo BASE_URL."assets/img/telas/".$data['producto']['pro_id'].'/principal.jpg'?>">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid card-slide-img-single" src="<?php echo BASE_URL."/assets/assets/images/tela-rosa.jpg"?>">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid card-slide-img-single" src="<?php echo BASE_URL."/assets/assets/images/tela-rosa.jpg"?>">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid card-slide-img-single" src="<?php echo BASE_URL."/assets/assets/images/tela-rosa.jpg"?>" alt="Product Image 4">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid card-slide-img-single" src="<?php echo BASE_URL."/assets/assets/images/tela-rosa.jpg"?>" alt="Product Image 5">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid card-slide-img-single" src="<?php echo BASE_URL."/assets/assets/images/tela-rosa.jpg"?>" alt="Product Image 6">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Second slide-->

                                <!--Third slide-->
                                
                                <!--/.Third slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body ">
                            <h1 style="font-weight : bold!important" class="h1 font-weight-bold"><?php echo $data['producto']["TELA"]?></h1>
                            <p style="" class="h2 py-3"> <?php echo $data['producto']["precio"].MONEDA?></p>
                           
                            
                           

                            <h5 class=""><strong>Description:</strong></h5>
                            <p  class="h6 single-description py-3 text-dark"><?php echo $data['producto']["modelo_descripcion"]?></p>
                            
                            <form action="" method="GET">
                                <input type="hidden" id='idProducto' value="<?php echo $data['producto']['pro_id']?>" >
                                <div class="row">
                                    
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Cantidad
                                                <input type="hidden"  id="product-quanity" value="20">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">20</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button class="btn  btn-success btn-lg  " id="btnAddCart" >Añadir al carrito</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">
                <?php foreach ($data['relacionados'] as $p){?>

                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL."assets/img/telas/".$p['pro_id'].'/principal.jpg'?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    
                                    <li><a class="btn btn-success text-white mt-2" href="<?php echo BASE_URL.'productos/detail/'.$p['pro_id']?>"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success btnAddProducto text-white mt-2" prod=<?php echo $p['pro_id']?>><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $p['TELA']?></a>
                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                
                                <li class="pt-2">
                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                </li>
                            </ul>
                            <ul class="list-unstyled d-flex justify-content-center mb-1">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                            </ul>
                            <p class="text-center mb-0"><?php echo $p['precio'].MONEDA?></p>
                        </div>
                    </div>
                </div>
                <?php }?>


            </div>
            


        </div>
    </section>
    <?php
include_once("./Views/templates/footer.php")
?>
    