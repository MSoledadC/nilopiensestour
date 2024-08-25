<?php
    $conexion=mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "nilopiensestour");


    $nombre_itinerario= $_POST['nombre_itinerario'];
    $continente= $_POST['continente'];
    $lugares_itinerario = $_POST['lugares_itinerario'];
    $descripcion = $_POST['descripcion'];
    $noches = $_POST['noches'];
    $fecha_salida = $_POST['fecha_salida'];    
    $promocion3 = (int)$_POST['promocion3']; 
    $datos_excursion = $_POST['datos_excursion'];
    $pais = $_POST['pais']; 
    $contenido_disponible = $_POST['contenido_disponible']; 
        

    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $imagen2 = addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));
    $imagen3 = addslashes(file_get_contents($_FILES['imagen3']['tmp_name']));
    $imagen4 = addslashes(file_get_contents($_FILES['imagen4']['tmp_name']));
    $imagen5 = addslashes(file_get_contents($_FILES['imagen5']['tmp_name']));

    $consulta = "INSERT INTO itinerarios (id, nombre_itinerario, continente, lugares_itinerario, descripcion, noches, fecha_salida, promocion3, datos_excursion, pais, contenido_disponible, imagen, imagen2, imagen3, imagen4, imagen5) 
    VALUES ('', '$nombre_itinerario', '$continente', '$lugares_itinerario', '$descripcion', '$noches', '$fecha_salida', '$promocion3', '$datos_excursion', '$pais', '$contenido_disponible', '$imagen', '$imagen2', '$imagen3', '$imagen4', '$imagen5')";

    mysqli_query($conexion,$consulta);

    header('location: lista.php');
?>
