<?php
session_start();

ob_start();

$conexion=mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "nilopiensestour");

$id = $_GET['id'];
$consulta = "SELECT * FROM itinerarios WHERE id=$id";
$respuesta = mysqli_query($conexion, $consulta);
$datos = mysqli_fetch_array($respuesta);
?>
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
                    <img class="mb-0 logonav"src="images/logo_.png" alt="Nilopiensestour logo" width="100" height="100"/>
                    <!-- <h1 class="text-white mb-0 nava"><strong>NI LO PIENSES TOUR</strong></h1>-->
                </div>
                <div class="col-8 col-md-8 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                            <li class="active">
                                <a class="text-white" href="index.php">Inicio</a>
                            </li>
                            <li class="has-children">
                                <a class="text-white" >Destinos</a>
                                <ul class="dropdown">
                                    <li><a class="text-white" href="america.php">América</a></li>
                                    <li><a class="text-white" href="europa.php">Europa</a></li>                               
                                    <li><a class="text-white" href="asia.php">Asia</a></li>            
                                    <li><a class="text-white" href="africa.php">África</a></li>
                                    <li><a class="text-white" href="paquetes.php">Paquetes</a></li> 
                                </ul>
                            </li>
                            <li><a class="text-white" href="itinerarios.php"> Servicios</a></li>
                            <li><a class="text-white" href="nosotros.html"> Quienes Somos</a></li>             
                            <li><a class="text-white" href="contacto.html">Contacto</a> </li>     
                            <!--<li><a href="blog.html">Blog</a></li>
                            <li><a href="discount.html">Discount</a></li>
                            <li><a href="booking.html">Book Online</a></li> -->
                        </ul>
                    </nav>
                </div>

                <div class="col-6 col-xl-2 text-right">
                    <div class="d-none d-xl-inline-block">
                        <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0"
                            data-class="social">
                            <li><a href="https://www.facebook.com/people/NI-Lo-Pienses-Tour/61562454133917/?mibextid=qi2Omg&rdid=HgxgTyFEMMvE3Rao&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2FKn3GWjBhuihHipro%2F%3Fmibextid%3Dqi2Omg" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-facebook"></span></a>
                            </li>
                            <li><a href="https://www.instagram.com/nilopiensestour?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-instagram"></span></a>
                            </li>
                            <li><a href="https://www.tripadvisor.es/Attraction_Review-g150812-d27967357-Reviews-Ni_Lo_Pienses_Tour-Playa_del_Carmen_Yucatan_Peninsula.html" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-tripadvisor"></span></a>
                            </li>
                            <li><a href="login.html" target="_blank" class="pl-3 pr-3 text-white"><span class="icon-user"></span></a>
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

   

  <!-- property area -->
  <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/portadas/2.webp);" data-aos="fade" data-stellar-background-ratio="0.5"><div class="container">
            <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-white font-weight-light">NI LO PIENSES TOUR</h1>
                <div><a href="lista.php">Lista</a> <span class="mx-2 text-white">&bullet;</span> <span
                    class="text-black-50">Editar </span></div>
                    <h2><strong> <?php echo $_SESSION["usuario"] ?></strong></a></h2>
                    <h6><a href="cerrarsesion.php" >Cerrar Sesión</a></h6>
              </div>
            </div>
          </div>
        </div>

        <?php
            $nombre_itinerario=$datos["nombre_itinerario"];
            $lugares_itinerario=$datos["lugares_itinerario"];
            $datos_excursion=$datos["datos_excursion"];
            $descripcion=$datos["descripcion"]; 
            $pais=$datos["pais"]; 
            $continente = $datos["continente"]; 
            $contenido_disponible=$datos["contenido_disponible"]; 
            $noches=$datos["noches"];
            $fecha_salida=$datos["fecha_salida"];  
            $promocion3=$datos["promocion3"];  
            $imagen=$datos['imagen'];
            $imagen2=$datos['imagen2'];
            $imagen3=$datos['imagen3'];
            $imagen4=$datos['imagen4'];
            $imagen5=$datos['imagen5'];
            ?>

        <div class="site-section bg-light">
                <div class="container">
                    <div class="row">
                        <!-- Columna izquierda con el formulario -->
                        <div class="col-md-7">
                            <h3><b>Editar</b> ITINERARIOS<br><small>Seguir las indicaciones y llenar los campos requeridos.</small></h3>
                            <form action="" class="p-5 bg-white form" method="post" enctype="multipart/form-data">
                                <div class="row form-group">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <div class="form-group">
                                            <label>
                                                Itinerario Nombre <small>(requerido)</small>
                                                <input name="nombre_itinerario" type="text" class="form-control" placeholder="Itinerario Nombre" required value="<?php echo $datos['nombre_itinerario']; ?>">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label>Continente <small>(requerido)</small></label>
                                            <select name="continente" class="form-control" required>
                                            <option value="" disabled>Seleccione un continente</option>
                                            <option value="america" <?php echo ($continente == 'america') ? 'selected' : ''; ?>>América</option>
                                            <option value="africa" <?php echo ($continente == 'africa') ? 'selected' : ''; ?>>África</option>
                                            <option value="asia" <?php echo ($continente == 'asia') ? 'selected' : ''; ?>>Asia</option>
                                            <option value="paquetes" <?php echo ($continente == 'paquetes') ? 'selected' : ''; ?>>Paquetes</option>
                                            <option value="europa" <?php echo ($continente == 'europa') ? 'selected' : ''; ?>>Europa</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>País<small> (requerido)</small></label>
                                        <select name="pais" class="form-control" required>
                                        <option value="argentina" <?php echo ($datos['pais'] == 'argentina') ? 'selected' : ''; ?>>Argentina</option>
                                        <option value="brasil" <?php echo ($datos['pais'] == 'brasil') ? 'selected' : ''; ?>>Brasil</option>
                                        <option value="chile" <?php echo ($datos['pais'] == 'chile') ? 'selected' : ''; ?>>Chile</option>
                                        <option value="colombia" <?php echo ($datos['pais'] == 'colombia') ? 'selected' : ''; ?>>Colombia</option>
                                        <option value="costarica" <?php echo ($datos['pais'] == 'costarica') ? 'selected' : ''; ?>>Costa Rica</option>
                                        <option value="croacia" <?php echo ($datos['pais'] == 'croacia') ? 'selected' : ''; ?>>Croacia</option>
                                        <option value="egipto" <?php echo ($datos['pais'] == 'egipto') ? 'selected' : ''; ?>>Egipto</option>
                                        <option value="emiratosarabes" <?php echo ($datos['pais'] == 'emiratosarabes') ? 'selected' : ''; ?>>Emiratos Árabes</option>
                                        <option value="espana" <?php echo ($datos['pais'] == 'espana') ? 'selected' : ''; ?>>España</option>
                                        <option value="francia" <?php echo ($datos['pais'] == 'francia') ? 'selected' : ''; ?>>Francia</option>
                                        <option value="indonesia" <?php echo ($datos['pais'] == 'indonesia') ? 'selected' : ''; ?>>Indonesia</option>
                                        <option value="italia" <?php echo ($datos['pais'] == 'italia') ? 'selected' : ''; ?>>Italia</option>
                                        <option value="maldivas" <?php echo ($datos['pais'] == 'maldivas') ? 'selected' : ''; ?>>Maldivas</option>
                                        <option value="marruecos" <?php echo ($datos['pais'] == 'marruecos') ? 'selected' : ''; ?>>Marruecos</option>
                                        <option value="mexico" <?php echo ($datos['pais'] == 'mexico') ? 'selected' : ''; ?>>México</option>
                                        <option value="panama" <?php echo ($datos['pais'] == 'panama') ? 'selected' : ''; ?>>Panamá</option>
                                        <option value="paisesbajos" <?php echo ($datos['pais'] == 'paisesbajos') ? 'selected' : ''; ?>>Países Bajos</option>
                                        <option value="peru" <?php echo ($datos['pais'] == 'peru') ? 'selected' : ''; ?>>Perú</option>
                                        <option value="polonia" <?php echo ($datos['pais'] == 'polonia') ? 'selected' : ''; ?>>Polonia</option>
                                        <option value="portugal" <?php echo ($datos['pais'] == 'portugal') ? 'selected' : ''; ?>>Portugal</option>
                                        <option value="republicadominicana" <?php echo ($datos['pais'] == 'republicadominicana') ? 'selected' : ''; ?>>República Dominicana</option>
                                        <option value="sudafrica" <?php echo ($datos['pais'] == 'sudafrica') ? 'selected' : ''; ?>>Sudáfrica</option>
                                        <option value="tailandia" <?php echo ($datos['pais'] == 'tailandia') ? 'selected' : ''; ?>>Tailandia</option>
                                        <option value="turquia" <?php echo ($datos['pais'] == 'turquia') ? 'selected' : ''; ?>>Turquía</option>
                                    </select>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contenido 1=Con Contenido / 0=Sin<small> (requerido)</small>
                                                <input name="contenido_disponible" type="number" class="form-control" placeholder="Contenido Disponible" required value="<?php echo $datos['contenido_disponible']; ?>" min="0" max="1">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ubicación <small>(requerido)</small></label>
                                            <input name="lugares_itinerario" type="text" class="form-control" placeholder="Ubicación" required value="<?php echo $datos['lugares_itinerario']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Noches</label>
                                            <input name="noches" type="text" class="form-control" placeholder="Noches" value="<?php echo $datos['noches']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fecha Salida</label>
                                            <input name="fecha_salida" type="date" class="form-control" placeholder="Fecha Salida" value="<?php echo $datos['fecha_salida']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>1=Promoción / 0=NoPromoción <small>(requerido)</small></label>
                                            <input name="promocion3" type="text" class="form-control" placeholder="1 o 0" required value="<?php echo $datos['promocion3']; ?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <!-- Datos Excursión -->
                                    <div class="col-md-12">
                                        <label>Datos Excursión:</label>
                                        <textarea name="datos_excursion" class="form-control" placeholder="Datos Excursión" rows="5"><?php echo $datos['datos_excursion']; ?></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <!-- Descripción -->
                                    <div class="col-md-12">
                                        <label>Descripción:</label>
                                        <textarea name="descripcion" class="form-control" placeholder="Descripción" rows="5"><?php echo $datos['descripcion']; ?></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <!-- Input para la primera imagen -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Imagen 1 (.jpg 700x799px)</label>
                                            <input type="file" name="imagen">
                                        </div>
                                    </div>
                                    <!-- Inputs para las imágenes restantes -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Imagen 2 (.jpg 700x799px)</label>
                                            <input type="file" name="imagen2">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Imagen 3 (.jpg 700x799px)</label>
                                            <input type="file" name="imagen3">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Imagen 4 (.jpg 700x799px)</label>
                                            <input type="file" name="imagen4">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Imagen 5 (.jpg 700x799px)</label>
                                            <input type="file" name="imagen5">
                                        </div>
                                    </div>
                                </div>
                                <!-- Botón de enviar formulario -->
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <div class="pull-right">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <input type="submit" class='btn btn-finish btn-primary' name="guardar_cambios" value="Guardar Cambios">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['guardar_cambios'])) {
                                $nombre_itinerario = mysqli_real_escape_string($conexion, $_POST['nombre_itinerario']);
                                $continente = mysqli_real_escape_string($conexion, $_POST['continente']);
                                $pais = mysqli_real_escape_string($conexion, $_POST['pais']);
                                $contenido_disponible = (int)$_POST['contenido_disponible'];
                                $lugares_itinerario = mysqli_real_escape_string($conexion, $_POST['lugares_itinerario']);
                                $datos_excursion = mysqli_real_escape_string($conexion, $_POST['datos_excursion']);
                                $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
                                $noches = mysqli_real_escape_string($conexion, $_POST['noches']);
                                $fecha_salida = mysqli_real_escape_string($conexion, $_POST['fecha_salida']);
                                $promocion3 = (int)$_POST['promocion3'];
                                $id = (int)$_POST['id'];

                                // Inicia la consulta
                                $consulta = "UPDATE itinerarios SET ";
                                $consulta .= "nombre_itinerario='$nombre_itinerario', ";
                                $consulta .= "continente='$continente', ";
                                $consulta .= "pais='$pais', ";
                                $consulta .= "contenido_disponible='$contenido_disponible', ";
                                $consulta .= "lugares_itinerario='$lugares_itinerario', ";
                                $consulta .= "descripcion='$descripcion', ";
                                $consulta .= "noches='$noches', ";
                                $consulta .= "datos_excursion='$datos_excursion', ";
                                $consulta .= "fecha_salida='$fecha_salida', ";
                                $consulta .= "promocion3='$promocion3' ";

                                // Agregar imágenes si se han subido
                                if ($_FILES['imagen']['tmp_name']) {
                                    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
                                    $consulta .= ", imagen='$imagen' ";
                                }
                                if ($_FILES['imagen2']['tmp_name']) {
                                    $imagen2 = addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));
                                    $consulta .= ", imagen2='$imagen2'";
                                }
                                if ($_FILES['imagen3']['tmp_name']) {
                                    $imagen3 = addslashes(file_get_contents($_FILES['imagen3']['tmp_name']));
                                    $consulta .= ", imagen3='$imagen3'";
                                }
                                if ($_FILES['imagen4']['tmp_name']) {
                                    $imagen4 = addslashes(file_get_contents($_FILES['imagen4']['tmp_name']));
                                    $consulta .= ", imagen4='$imagen4'";
                                }
                                if ($_FILES['imagen5']['tmp_name']) {
                                    $imagen5 = addslashes(file_get_contents($_FILES['imagen5']['tmp_name']));
                                    $consulta .= ", imagen5='$imagen5'";
                                }

                                // Añadir la condición WHERE al final de la consulta
                                $consulta .= "WHERE id=$id";

                                // Ejecutar la consulta
                                if (mysqli_query($conexion, $consulta)) {
                                    header('location: lista.php');
                                    exit();
                                } else {
                                    echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
                                }
                            }
                            ?>
                                
                            </div>
                            <!-- Columna derecha con el contenido adicional -->
                            <div class="col-md-5">
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