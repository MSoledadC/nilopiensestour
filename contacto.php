<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="google-site-verification" content="fHQZZUJkBFcxu885s-_RxvO19M0c53Qhjosu2NYXlFE" />
  <title>NilopiensesTour &mdash; Agencia de viajes</title>
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="keywords" content="Ni Lo Pienses Tour" />
  <meta name="author" content="MSoledadC" />
  <meta name="description"content="Con nosotros, cada viaje es una nueva historia por escribir,desde playas paradisíacas hasta ciudades históricas, desde aventuras extremas hasta escapadas románticas, diseñamos cada experiencia con atención al detalle y pasión por el viaje."/>
  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="Ni Lo Pienses Tour" />
  <meta property="og:image"content="https://www.nilopiensestour.com/images/logo_redes.png"/>
  <meta property="og:url" content="https://www.nilopiensestour.com/" />
  <meta property="og:site_name" content="Ni Lo Pienses Tour" />
  <meta property="og:type" content="Sitio Web" />
  <meta property="og:description"content="Con nosotros, cada viaje es una nueva historia por escribir,desde playas paradisíacas hasta ciudades históricas, desde aventuras extremas hasta escapadas románticas, diseñamos cada experiencia con atención al detalle y pasión por el viaje."/>
  
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,200;1,300&family=Poppins:ital,wght@0,200;0,400;1,100&display=swap"
    rel="stylesheet" >

  <!--<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">-->

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/logotr.ico">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  

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
            <div class="col-4 col-xl-2 logocontainer">
              <img class="mb-0 logonav"src="images/logo_.png" alt="Nilopiensestour logo" width="100" height="100"/>
               <!-- <h1 class="text-white mb-0 nava"><strong>NI LO PIENSES TOUR</strong></h1>-->
            </div>
            <?php
              // 1) Conexión
                $conexion = mysqli_connect("127.0.0.1", "root", "", "nilopiensestour");
              mysqli_set_charset($conexion, "utf8");

              // Función para obtener destinos por continente
              function obtener_destinos($conexion, $continente) {
              $query = "SELECT DISTINCT pais FROM itinerarios WHERE continente = '$continente' AND 
             contenido_disponible = 1";
             $result = mysqli_query($conexion, $query);

             if (!$result) {
             die('Error en la consulta: ' . mysqli_error($conexion));
             }

            $destinos = [];
            while ($row = mysqli_fetch_assoc($result)) {
            $destinos[] = $row['pais'];
            }

            return $destinos;
             }

              // Función para convertir nombres de países a formato visual
              function nombre_pais_visual($pais) {
                  $mapa_paises = [
                      'mexico' => 'México',
                      'peru' => 'Perú',
                      // Agrega más países según sea necesario
                  ];

                  return $mapa_paises[$pais] ?? ucfirst($pais);
              }

              // Obtener destinos para cada continente
              $destinos_america = obtener_destinos($conexion, 'América');
              $destinos_europa = obtener_destinos($conexion, 'Europa');
              $destinos_africa = obtener_destinos($conexion, 'África');
              $destinos_asia = obtener_destinos($conexion, 'Asia');
              $destinos_paquetes = obtener_destinos($conexion, 'Paquetes');
              ?>

              <div class="col-8 col-md-8 d-none d-xl-block">
                  <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
                      <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                          <li class="active">
                              <a class="text-white" href="index.html">Inicio</a>
                          </li>
                          <li class="has-children">
                              <a class="text-white" href="#">Destinos</a>
                              <ul class="dropdown">
                                  <?php if (!empty($destinos_america)): ?>
                                      <li class="has-children">
                                          <a class="text-white" href="america.php">América</a>
                                          <ul class="dropdown">
                                              <?php foreach ($destinos_america as $pais): ?>
                                                  <li><a class="text-white" href="<?= strtolower($pais) ?>.php"><?= nombre_pais_visual($pais) ?></a></li>
                                              <?php endforeach; ?>
                                          </ul>
                                      </li>
                                  <?php endif; ?>

                                  <?php if (!empty($destinos_europa)): ?>
                                      <li class="has-children">
                                          <a class="text-white" href="europa.php">Europa</a>
                                          <ul class="dropdown">
                                              <?php foreach ($destinos_europa as $pais): ?>
                                                  <li><a class="text-white" href="<?= strtolower($pais) ?>.php"><?= nombre_pais_visual($pais) ?></a></li>
                                              <?php endforeach; ?>
                                          </ul>
                                      </li>
                                  <?php endif; ?>

                                  <?php if (!empty($destinos_asia)): ?>
                                      <li class="has-children">
                                          <a class="text-white" href="asia.php">Asia</a>
                                          <ul class="dropdown">
                                              <?php foreach ($destinos_asia as $pais): ?>
                                                  <li><a class="text-white" href="<?= strtolower($pais) ?>.php"><?= nombre_pais_visual($pais) ?></a></li>
                                              <?php endforeach; ?>
                                          </ul>
                                      </li>
                                  <?php endif; ?>

                                  <?php if (!empty($destinos_africa)): ?>
                                      <li class="has-children">
                                          <a class="text-white" href="africa.php">África</a>
                                          <ul class="dropdown">
                                              <?php foreach ($destinos_africa as $pais): ?>
                                                  <li><a class="text-white" href="<?= strtolower($pais) ?>.php"><?= nombre_pais_visual($pais) ?></a></li>
                                              <?php endforeach; ?>
                                          </ul>
                                      </li>
                                  <?php endif; ?>

                                  <?php if (!empty($destinos_paquete)): ?>
                                      <li class="has-children">
                                          <a class="text-white" href="paquetes.php">Paquetes</a>
                                          <ul class="dropdown">
                                              <?php foreach ($destinos_paquete as $pais): ?>
                                                  <li><a class="text-white" href="<?= strtolower($pais) ?>.php"><?= nombre_pais_visual($pais) ?></a></li>
                                              <?php endforeach; ?>
                                          </ul>
                                      </li>
                                  <?php else: ?>
                                      <li><a class="text-white" href="paquetes.php">Paquetes</a></li>
                                  <?php endif; ?>
                              </ul>
                          </li>
                          <li><a class="text-white" href="itinerarios.php">Servicios</a></li>
                          <li><a class="text-white" href="nosotros.php">Quienes Somos</a></li>
                          <li><a class="text-white" href="contacto.php">Contacto</a></li>
                      </ul>
                  </nav>
              </div>
            <div class="col-6 col-xl-2 text-right">
              <div class="d-none d-xl-inline-block">
                  <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0"
                      data-class="social">
                      <li><a href="https://www.facebook.com/people/NI-Lo-Pienses-Tour/61562454133917/?mibextid=qi2Omg&rdid=HgxgTyFEMMvE3Rao&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2FKn3GWjBhuihHipro%2F%3Fmibextid%3Dqi2Omg" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-facebook large-icon"></span></a>
                      </li>
                      <li><a href="https://www.instagram.com/nilopiensestour?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-instagram large-icon"></span></a>
                      </li>
                      <li><a href="https://www.tripadvisor.es/Attraction_Review-g150812-d27967357-Reviews-Ni_Lo_Pienses_Tour-Playa_del_Carmen_Yucatan_Peninsula.html" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-tripadvisor large-icon"></span></a>
                      </li>
                      <li><a href="login.html" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-user large-icon"></span></a>
                      </li>                          
                  </ul>
              </div>
              <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3 menu-vista-cel" style="position: relative; top: 3px; ">
                  <a href="#" class="site-menu-toggle js-menu-toggle text-white "><span class="icon-menu h3 menuvistacel"></span></a>
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</header>

    <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/portadas/8.webp);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-portada font-weight-light">Contacto</h1>
              <div><a href="index.html" class="text-portada" >Inicio</a> <span class="mx-2 text-portada ">&bullet;</span> <span class="text-portada">Contacto</span></div>
              
            </div>
          </div>
        </div>
      </div>  

      <div class="btn-wrapper">
        <a href="https://wa.me/34685804332/?text=%20Hola%20Ni%20Lo%20Pienses%20tour,%20quisiera%20saber%20sobre:"
          target="_blank" class="btn-ws">
          <img src="images/logo_ws.png" alt="Nilopiensestour ws" width="70" height="70" />
        </a>
      </div>
    
    <div class="site-section contacto">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div><h1 class="titulocontacto entrada-desde-izquierda" >Ni Lo Pienses Tour <i class="fa-solid fa-route"></i></i></h1>
              <h3 class="subtitulo-contacto">Diseñamos cada experiencia con atención al detalle y pasión por el viaje...</h3>
            </div>         
            <form action="mail.php" class="p-5 form">
              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="color-texto" for="nombre">Nombre</label>
                  <input type="text" id="nombre" placeholder="Nombre" name="nombre" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="color-texto" for="apellido">Apellido</label>
                  <input type="text" id="apellido" placeholder="Apellido" name="apellido" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="color-texto" for="email">Email</label> 
                  <input type="email" placeholder="Email" id="email" name="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="color-texto" for="subject">Asunto</label> 
                  <input type="asunto" placeholder="Asunto" id="asunto" name="asunto" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="color-texto" for="mensaje">Mensaje</label> 
                  <textarea name="mensaje" id="mensaje" cols="30" rows="7" class="form-control" placeholder="Escriba aquí su consulta..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Enviar correo
                    <i class="fa fa-envelope-o"> </i>
                    <a href="mailto:info@nilopiensestour.com?subject=Asunto del mensaje&body=Nombre: [nombre]%0D%0AApellido: [apellido]%0D%0ACorreo electrónico: [email]%0D%0AMensaje: [mensaje]">
                        
                    </a>
                </button>
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            
              <div class="p-4 mb-3 bg-white">
                <p class="mb-0 color-texto font-weight-bold"><i class="fi fi-rr-map"></i> Ubicación</p>
                <p class="mb-4"><a href="https://maps.app.goo.gl/qS9KhPb6yYttkkKAA" target="_blank">Alicante - España</a></p>
  
                <p class="mb-0 color-texto font-weight-bold border-top"><i class="fi fi-rr-circle-phone"></i> Teléfono</p>
                <p class="mb-4"><a href="https://wa.me/34685804332/?text=%20Hola%20Ni%20Lo%20Pienses%20tour,%20quisiera%20saber%20sobre:" target="_blank"> +34 685804332 </a></p>
  
                <p class="mb-0 color-texto font-weight-bold border-top">Email </p>
                <p class="mb-0"><a href="#">info@nilopiensestour.com</a></p>
  
              </div>

    
            
            <div class="p-4 mb-3 bg-white">
              <img src="images/portadas/3.webp" alt="NilopiensesTour" class="img-fluid mb-4 rounded">
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
                    <img src="images/logo_.png" width="120" height="120" alt="NilopiensesTour logo" class="logo_footer">
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
                      <a class="social-icon mr-2 redes_footer" href="https://www.facebook.com/people/NI-Lo-Pienses-Tour/61562454133917/?mibextid=qi2Omg&rdid=HgxgTyFEMMvE3Rao&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2FKn3GWjBhuihHipro%2F%3Fmibextid%3Dqi2Omg" target="_blank"><i class="fa fa-facebook"></i></a>
                      <a class="social-icon mr-2 redes_footer" href="https://www.instagram.com/nilopiensestour?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fa fa-instagram"></i></a>
                      <a class="social-icon mr-2 redes_footer" href="https://www.tripadvisor.es/Attraction_Review-g150812-d27967357-Reviews-Ni_Lo_Pienses_Tour-Playa_del_Carmen_Yucatan_Peninsula.html" target="_blank"><span class="icon-tripadvisor"></span></a>
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
						  target="_blank"> MSoledadC</a></a>.</p><span class="footer__backtotop" id="back-to-top"> <i class="fa fa-arrow-up"></i>Inicio</span>
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