<?php

$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "servicios_productos");

$id = $_GET['id'];
$consulta = "SELECT * FROM proyectos WHERE id=$id";
$respuesta = mysqli_query($conexion, $consulta);
$datos=mysqli_fetch_array($respuesta);

if(array_key_exists('guardar_cambios',$_POST)){
    $nombre=$_POST['nombre'];
    $ubicacion=$_POST['ubicacion'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $m2=$_POST['metros'];
    $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $consulta = "UPDATE proyectos SET nombre='$nombre', ubicacion='$ubicacion', descripcion='$descripcion', precio='$precio', metros='$metros', imagen='$imagen' WHERE id=$id";

    mysqli_query($conexion,$consulta);

header('location: propiedades.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="google-site-verification" content="fHQZZUJkBFcxu885s-_RxvO19M0c53Qhjosu2NYXlFE" />
  <title>NilopiensesTour &mdash; Agencia de viajes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="keywords" content="Crista Travel" />
	<meta name="author" content="MSoledadC" />
  <meta name="description" content="Servicio personalizado en cada viaje, estamos presentes en cada detalle, para que su viaje se transforme en una experiencia inolvidable de principio a fin.">
  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content="Crista Travel"/>
	<meta property="og:image" content="https://www.cristatravel.tur.ar/images/Logo_crista.jpg"/>
	<meta property="og:url" content="https://www.cristatravel.tur.ar/"/>
	<meta property="og:site_name" content="Crista Travel"/>
    <meta property="og:type" content="Sitio Web">
	<meta property="og:description" content="Nuestra Agencia de viaje ofrece un servicio personalizado, estamos presentes en cada detalle, para que su viaje se transforme en una experiencia inolvidable de principio a fin."/>
	<meta name="twitter:title" content="Crista Travel" />
	<meta name="twitter:image" content="https://www.cristatravel.tur.ar/images/Logo_crista.jpg" />
	<meta name="twitter:url" content="https://www.cristatravel.tur.ar/" />
	<meta name="twitter:card" content="summary" />

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,200;1,300&family=Poppins:ital,wght@0,200;0,400;1,100&display=swap"
    rel="stylesheet">


  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/logotr.ico">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/cambios.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

  <script src="https://kit.fontawesome.com/df0028962f.js" crossorigin="anonymous"></script>

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-1" role="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-xl-2">
                    <img class="mb-0 logonav" src="images/logo-tr.png" alt="Nilopiensestour logo" width="150" height="150">
                    <!-- <h1 class="text-white mb-0 nava"><strong>NI LO PIENSES TOUR</strong></h1>-->
                </div>
                <div class="col-8 col-md-8 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                            <li class="active">
                                <a class="text-white" href="index.html">Inicio</a>
                            </li>
                            <li class="has-children">
                            <a class="text-white" >Destinos</a>
                                <ul class="dropdown">
                                    <li><a class="text-white" href="puntacana.html">América</a></li>
                                    <li><a class="text-white" href="">Europa</a></li>
                                    <li><a class="text-white" href="">Cruceros</a></li>               
                                    <li><a class="text-white" href="">Oriente Medio</a></li>            
                                    <li><a class="text-white" href="marruecos.html">África</a></li>
                                </ul>
                            </li>
                            <li><a class="text-white" href="itinerarios.html"> Servicios</a></li>
                            <li><a class="text-white" href="nosotros.html"> Quienes Somos</a></li>             
                            <li><a class="text-white" href="contacto.html">Contacto</a> </li>    
                        </ul>
                    </nav>
                </div>

                <div class="col-6 col-xl-2 text-right">
                  <div class="d-none d-xl-inline-block">
                      <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0"
                          data-class="social">
                          <li>
                              <a href="https://www.facebook.com/NiLoPiensesTour" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-facebook"></span></a>
                          </li>
                          <li>
                              <a href="https://www.instagram.com/nilopiensestour?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="pl-3 pr-3 text-white"><span
                                      class="icon-instagram" ></span></a>
                          </li>
                          <li>
                              <a href="https://www.linkedin.com/in/ni-lo-pienses-tours-4986a52a3/" target="_blank" class="pl-3 pr-3 text-white" ><span
                                      class="icon-linkedin"></span></a>
                          </li>
                          <li>
                              <a href="login.html"  class="pl-3 pr-3 text-white"><span
                                      class="icon-user"></span></a>
                          </li>
                      </ul>
                  </div>

                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                        <a href="#" class="site-menu-toggle js-menu-toggle text-white "><span class="icon-menu h3 menuvistacel"></span></a>
                    </div>

                </div>

            </div>
        </div>

    </header>
    

    <div class="btn-wrapper">
      <a href="https://wa.me/34685804332/?text=%20Hola%20Ni%20Lo%20Pienses%20tour,%20quisiera%20saber%20sobre:"
        target="_blank" class="btn-ws">
        <img src="images/logo_ws.png" alt="Nilopiensestour ws" width="70" height="70" />
      </a>
    </div>

    <?php
            $nombre_itinerario=$datos["nombre_itinerario"];
            $lugares_itinerario=$datos["lugares_itinerario"];
            $descripcion=$datos["descripcion"];
            $noches=$datos["noches"];
            $fecha_salida=$datos["fecha_salida"];  
            $imagen=$datos['imagen'];?>

  <!-- property area -->
  <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/portadas/2.png);" data-aos="fade" data-stellar-background-ratio="0.5"></div>

  <div class="site-section bg-light">
      <div class="container">
          <div class="row">
              <!-- Columna izquierda con el formulario -->
              <div class="col-md-7">
                  <h3><b>Subir</b> ITINERARIOS<br><small>Seguir las indicaciones y llenar los campos requeridos.</small></h3>
                  <form action="agregar.php" class="p-5 bg-white" method="post" enctype="multipart/form-data">
                      <div class="row form-group">
                          <div class="col-md-6 mb-3 mb-md-0">
                              <div class="form-group">
                                  <label>Itinerario Nombre <small>(requerido)</small></label>
                                  <input name="nombre_itinerario" type="text" class="form-control" placeholder="Itinerario Nombre" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Ubicación <small>(requerido)</small></label>
                                  <input name="lugares_itinerario" type="text" class="form-control" placeholder="Ubicación" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Noches <small>(requerido)</small></label>
                                  <input name="noches" type="text" class="form-control" placeholder="Noches" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>Fecha Salida <small>(requerido)</small></label>
                                  <input name="fecha_salida" type="date" class="form-control" placeholder="Fecha Salida" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label>promocion3 <small>(requerido)</small></label>
                                  <input name="promocion3" type="text" class="form-control" placeholder="1 true" required>
                              </div>
                          </div>
                      </div>
                      <div class="row form-group">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label>Descripción :</label>
                                  <textarea name="descripcion" type="text" placeholder="Descripción" class="form-control" required></textarea>
                              </div>
                          </div>
                      </div>
                      <div class="row form-group">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label>Imagen:</label>
                                  <input type="file" name="imagen" id="wizard-picture">
                              </div>
                          </div>
                      </div>
                      <div class="row form-group">
                          <div class="col-md-12">
                              <div class="pull-right">
                                  <input type="submit" class='btn btn-finish btn-primary' name="submit" value="Agregar">
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <!-- Columna derecha con el contenido adicional -->
              <div class="col-md-5">
                  <div class="p-4 mb-3 bg-white">
                      <img src="images/portadas/3.jpg" alt="NilopiensesTour" class="img-fluid mb-4 rounded">
                      <h3 class="h5 text-contacto mb-3">Si algo bueno te pasa</h3>
                      <p class="texto-contacto">
                          <span>Si algo bueno te pasa, Viaja para celebrar... </span><br>
                          <span>Si algo malo te pasa, Viaja para olvidar... </span><br>
                          <span>Si nada te pasa, Viaja, para que algo te pase... </span>
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
   
<!-- footer -->			
<footer class="site-footer">
      <div class="container">
          <div class="row d-flex align-items-center footer-vista-cel">
              <div class="col-lg-2 col-md-4 mb-2">
                  <div class="footer_widget">
                      <img src="images/logo-tr.png" width="150" height="150" alt="NilopiensesTour logo" class="logo_footer">
                  </div>
              </div>
              <div class="col-lg-6 col-md-8 mb-8 mb-lg-0">
                  <div class="row">
                      <div class="col-md-12">
                          <ul class="list-unstyled">
                              <li><a href="https://maps.app.goo.gl/nmgiiBNKB7BUAE849" target="_blank"><i class="fa fa-map-o"></i> Alicante - España</a></li>
                              <li><a href="https://maps.app.goo.gl/qS9KhPb6yYttkkKAA" target="_blank"><i class="fa fa-map-marker"></i> Ni lo pienses tour - Av. D” Escandinavia 98 - Gran Alacant</a></li>
                              <li><a href="https://wa.me/34685804332/?text=%20Hola%20Ni%20Lo%20Pienses%20tour,%20quisiera%20saber%20sobre:" target="_blank"><i class="fi fi-rr-circle-phone"></i> +34 685804332 </a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-6 mb-2 mb-lg-0">
                  <div class="footer__social">
                      <h3 class="footer-heading mb-2">Redes Sociales</h3>
                      <div class="d-flex justify-content-between">
                          <a class="social-icon mr-2" href="https://www.facebook.com/NiLoPiensesTour" target="_blank"><i class="fa fa-facebook"></i></a>
                          <a class="social-icon mr-2" href="https://www.instagram.com/nilopiensestour?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fa fa-instagram"></i></a>
                          <a class="social-icon" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                          <a class="social-icon" target="_blank" href="#"><i class='bx bxl-visa'></i></a>
                       </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-6 mb-2 mb-lg-0">
                  <div class="footer__social">
                      <h3 class="footer-heading mb-2">Pago Seguro</h3>
                      <div class="d-flex justify-content-between">
                          <a class="icono_pagoseguro"><img class="iconos_pagoseguro" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfhJREFUWEft1knIjlEYxvHfJykbpAzpw8LGnGFn9S1IlJRCiQU2xMKQQvmKBZGyMGRciSI2LGTYoUgUISwMRYZEKclQnFv3W+/C612+m3M2z3Cec+7r/K/rOc/TpcOtq8P1VQGVQCVQCVQCzQT6YAq2YAheYRW+5Xa9H5NwEr9K/3JcxzaMxmbMwjDcwCY8zLHrMQ+/MTvH/+36lwXD8QQDsRhnMSoFxZix6MUS7Maucv4MQ/ES78uY8ejBPcwowm42fXOm5/2WAqIjii4sIvZhQxbcjkuYi/uYjGV4i2tZYCReI2j2xQ+cwaJcVIhfWwgfbAhqFcKVOI5buYKwIyafU66vpC39MBWf8TyLBoFAfy4LdONFClmHoziFpe0EjMAb/MQCXEzMsYJxhc6j9LN/ycz3pHKkiI6C0cKWrdiZmTqBPXiaYse0ExD9EaAJeZyINcXnQ2lNWBSThaBGCzEHsCJXPCjtGJw2RE4isNEi5B9bhbAx4V5szIsvBV9Q+VqCG1mIEJ7PkF7G1ZLyu4i0R0Zup4XHWvzwzMeFdgJm5sTxXCOMcR6Fw5YQcjpJNOrEaxZ2Ba0IbJBbjcP5QBDY0WTRf/+IImTxCkV7gE95Pg0DsvC73BsCc9B5nMfmsXfyXgyPPSIy9CGfrb9klUAlUAlUAp0n8Ae0NWohlKNEwwAAAABJRU5ErkJggg=="/></a>
                          <a class="icono_pagoseguro"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAiRJREFUWEft1kuoT1EUx/HPNSAyIQMjoQykKGXgNVEUJVEeIwwYMSLKRJlJZIwueURSGCBFSd4ZeE2QRzEwEMlAktd/1bn1b3f+5+xz6N7JXZN//332b63vXnvttXefIba+IY5vGCA3A+exMmO77uACjuFzxvysLRiNbznOuuZ8xVacrNPlZGAWHtc56vF9I45XaXMA1uFMS4CnnS2JBfS0HIA92N0S4CdG4k8vfQ7AWaxpCRCBAyBASi0H4AlmtgR4hxmYiFdlPuoARhQnYFRLgCjAo+jH9LJM1AFMwZuWwUO2AkuwBUtxNfVVB7AMl1sCvMQivEZkcAf2NwXYhgMtAKL45hVBVxX68HWwKcARbGoI8KLQxOrjCA9YtPKLTQFuY34GwG/EPXCqU/XncAirE90EfGoKEILxiShWdiMZG4e5WItI+djk+/UO4OKmxzCIPyaiZ4jCfJ+RlYEpUQ+RxXtNARbgViKK2y0646VMgNiaqKG4nkut6hhuxuFEtbP4vy8D4DniNnxQNbcKIM7s9kS8vCiu9cn4Q1wpxuItcL/TgO5mQFY+SKIBxX532zSc7jSnOSXjpb2+DqIqA28xucvBr6KjfUmq/EcxXherUQ1E6/yeKGKFC/EhGX+E2a2idzpVrwwEQDwux3Q5jkYT2xK/3XYCG/43QC9/ZSdjF/YOFkDZyYjr9tpgAUztPDAmJcFuVr356sDq3gN1+n/+PgzwF6IPWiEkbD7/AAAAAElFTkSuQmCC"/></a>
                          <a class="icono_pagoseguro"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAkFJREFUWEft1kuoTWEUB/DfJfIaSF6ZEVKESJ4DSqLM5RFCGIm6kQyQmVdJJCPPxMSAATOKYuAREmJAhJnySvLYS/ve9t32Pd/OHdzU+ep0Oqf/Wt9//dfra9HNp6Wb79ck0FTgv1FgAEaiD17jHX5VdNBAjEB8v8D7VJc1UqAXVmAtZpccvcV2nMZPTMZhzCnhPuBORnhj5ut5FZnOCEzHCYxLRLAcN3EXgxpgP2XKrcP5MqaKQERxHT0Slx9FpGZehtuFYwjVGp1WHCgCygSG4CGGJRzdxmXsyXGR7yCwL2H3HVPwqA1XJhCR7EwVDubjEvoWsJuwAeMT9o9zEt8CVyQQkr/JIhmecHAfFzPb3SXcSxzB3hoBLMKVMoGxeFrDOGRekJGYVIGNrjlTw8e2NqJFBaLVbtQw3owdWbRRL+UTXXG2ho/ABNkOKZiVt1TKPvJ8MCu4/l1Q4CoWlgn0w+fU7XmRrsKoLhCING4tE4jfzzIJxyRIXMjyF2QXV+CC2MkaQSzDuSoCW3J5G/n4isBF3xfPNbzCygSB2CNR8B+rCPREDJmpCScxgJZmFT+6gFudLaLj6J2wbY++ikD8NxH3EqP4B9bjUD6OI6dzMS1xeeyNDgurs2U0IyuyU4l6iI24BhPybRgt2OjcwpI8Te24Rus4pIyxHJEOrvAcqYqB8iBTYX/e11Xyf8lXd6zrv94QdV9EsZZn5kRiXMfEjD1fPEMRs6T4IHmC+PyZ+1WnLoEanfVvkCaBpgJNBX4DTkJfIVPFwNkAAAAASUVORK5CYII="/></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- End / footer -->

        <div class="footer__wrapper">
				<div class="container">
					<p class="footer__copy">Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> -
						<a href="politicasprivacidad.html" target="_blank">Políticas de privacidad,</a><a href="avisolegal.html">Términos y condiciones,</a><a href="cookies.html"> Cookies</a>
						By <a href="https://taplink.cc/msoledadc"
						  target="_blank"> MSoledadC</a></a>.</p><span class="footer__backtotop" id="back-to-top"> <i class="fa fa-arrow-up"></i>Inicio</i> </i></span> <i class="fa-brands fa-glide-g" style="color: red;"></i>
				</div>
			</div>
     
		</div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
  <script src="js/backtotop.js"></script>

</body>

</html>