<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];
session_start();
$_SESSION["usuario"]= $usuario;

$confuser= "irenein";
$confpass= "2290924";


if ($usuario == $confuser && $contrasenia == $confpass) {
  header ( "location:lista.php");
}
else {
    header ( "location:error404.html");
    }

?>