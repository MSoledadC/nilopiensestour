<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];
session_start();
$_SESSION["usuario"]= $usuario;

$confuser= "admin";
$confpass= "1234";


if ($usuario == $confuser && $contrasenia == $confpass) {
  header ( "location:listarpropiedades.php");
}
else {
    header ( "location:404.html");
    }

?>