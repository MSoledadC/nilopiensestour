<?php
  $conexion=mysqli_connect("127.0.0.1", "root", "");
  mysqli_select_db($conexion, "nilopiensestour");

$id = $_GET['id'];

$consulta = "DELETE FROM `itinerarios` WHERE `id`=$id";

$respuesta = mysqli_query($conexion, $consulta);

mysqli_query($conexion,$consulta);

header('location: lista.php');
?>
