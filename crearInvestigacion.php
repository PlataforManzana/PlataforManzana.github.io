<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Plataforma - Asesoría Técnica de manzana</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body onload="getProductores();">
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <!-- <a href="index.php"><img src="img/core-img/logo.png" alt=""></a> -->
                            </div>
                            <div class="login-content">
                                <a href="registro.php">Registrar</a> / <a href="login.php">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
x
        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="#">Menú</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php">Inicio</a></li>
<!--                                             <li><a href="Acerca de nosotros-us.php">Acerca de nosotros</a></li>
 -->                                            <li><a href="course.php">Manzana</a></li>
                                            <li><a href="course.php">Cursos</a></li>
                                            <li><a href="crearInvestigacion.php">Crear Públicación</a></li>
                                            <!-- <li><a href="elements.php">Elementos</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="#">Manzana</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">Variedad</a></li>
                                                <li><a href="#">Tamaño</a></li>
                                                <li><a href="#">Color</a></li>
                                                <li><a href="#">Disponibilidad</a></li>
                                                <li><a href="#">Precio</a></li>
                                            </ul>
                                           <!--  <ul class="single-mega cn-col-4">
                                                <li><a href="#">Inicio</a></li>
                                                <li><a href="#">Servicios &amp; Características</a></li>
                                                <li><a href="#">Accordions and tabs</a></li>
                                                <li><a href="#">Menu ideas</a></li>
                                                <li><a href="#">Productos</a></li>
                                            </ul> -->
                                           <!--  <ul class="single-mega cn-col-4">
                                                <li><a href="#">Inicio</a></li>
                                                <li><a href="#">Servicios&amp; Características</a></li>
                                                <li><a href="#">Accordions and tabs</a></li>
                                                <li><a href="#">Menu ideas</a></li>
                                                <li><a href="#">Students Gallery</a></li>
                                            </ul> -->
                                            <div class="single-mega cn-col-4">
                                                <img src="img/bg-img/bg-1.jpg" alt="">
                                            </div>
                                     </div>
                                    </li><!-- 
                                    <li><a href="Acerca de nosotros-us.php">Acerca de nosotros</a></li> -->
                                    <li><a href="course.php">Cursos</a></li>
                                    <li><a href="crearInvestigacion.php">Crear publicación</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <!-- <span>Registro</span> -->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Crear publicación</h2>
        </div>
    </div>


<!--     <div class="map-area wow fadeInUp" data-wow-delay="300ms">
        <!-- <div id="googleMap"></div> --> -->
        <section class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-content">
                            <div class="row">                            
                                <!-- Contact Form Area -->
                                <div class="col-12 col-lg-12">
                                    <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms" id="form-inv">
                                        <!-- <form action="#" method="post"> -->
                                            <input type="text" class="form-control" id="titulo" placeholder="Título">
                                            <input type="text" class="form-control" id="datepicker" placeholder="dd/mm/yyyy">
                                            <textarea name="message" class="form-control" id="publicacion" cols="30" rows="10" placeholder="Descripción"></textarea>
                                            <!-- <input type="text" class="form-control" id="imagen" placeholder="Imagen"> -->
                                            <select style="height:58px; display:none" class="form-control select" multiple name="mySelect[]" id="listProductores">
                                            </select>

                                           <!--  <div class="col-md-5">
                                                <p><input type="file"  accept="image/*" name="image" id="fileDespensa"  onchange="loadFile(event)" style="display: none;"></p>
                                                <p><label for="fileDespensa" style="cursor: pointer;"><i class="fa fa-file-image-o" aria-hidden="true"></i> &nbsp;&nbsp; Elegir imagen</label></p>
                                                <p><img id="output" style="width: 60%;" /></p>
                                            </div> -->


                                            <input type="file" id="photo"><br/>
                                            <button class="btn academy-btn mt-30" onclick="crearPub()">Publicar</button>
                                            <div id="msg"></div>
                                            <!-- <button class="btn academy-btn mt-30" onclick="crearPub()">Publicar</button> -->
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ##### Footer Area Start ##### -->
     <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/core-img/logo1.png" alt=""></a>
                            </div>
                            <p>La plataforma ofrece servicios de asesoría técnica y comercialización para productores de manzana en Omitlán de Juárez. </p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                                   <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Galeria</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="img/bg-img/gallery1.jpg" class="gallery-img" title="Gallery Image 1"><img src="img/bg-img/gallery1.jpg" alt=""></a>
                                <a href="img/bg-img/gallery2.jpg" class="gallery-img" title="Gallery Image 2"><img src="img/bg-img/gallery2.jpg" alt=""></a>
                                <a href="img/bg-img/gallery3.jpg" class="gallery-img" title="Gallery Image 3"><img src="img/bg-img/gallery3.jpg" alt=""></a>
                                <a href="img/bg-img/gallery4.jpg" class="gallery-img" title="Gallery Image 4"><img src="img/bg-img/gallery4.jpg" alt=""></a>
                                <a href="img/bg-img/gallery5.jpg" class="gallery-img" title="Gallery Image 5"><img src="img/bg-img/gallery5.jpg" alt=""></a>
                                <a href="img/bg-img/gallery6.jpg" class="gallery-img" title="Gallery Image 6"><img src="img/bg-img/gallery6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contacto</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Dirección: Blvd. Forjadores de Puebla 205, Ampliación Momoxpa, 72760 Puebla, Pue.</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>203-808-8613 <br></p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>Universidad, Heroica Puebla de Zaragoza</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be< removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
   <!--  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> -->
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <script src="js/login_registro.js"></script>
    <!-- Google Maps -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/google-map/map-active.js"></script> -->
</body>

</html>