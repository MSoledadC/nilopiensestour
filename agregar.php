<?php
    $conexion=mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "nilopiensestour");


    $nombre_itinerario= $_POST['nombre_itinerario'];
    $lugares_itinerario = $_POST['lugares_itinerario'];
    $descripcion = $_POST['descripcion'];
    $noches = $_POST['noches'];
    $fecha_salida = $_POST['fecha_salida'];    
    $promocion3 = (int)$_POST['promocion3'];      

    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $consulta = "INSERT INTO itinerarios (id,nombre_itinerario,lugares_itinerario,descripcion,noches,fecha_salida,promocion3,imagen) VALUES ('','$nombre_itinerario','$lugares_itinerario','$descripcion','$noches','$fecha_salida','$promocion3','$imagen')";

    mysqli_query($conexion,$consulta);

    header('location: lista.php');
?>
