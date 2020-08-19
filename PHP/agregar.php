<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

include "conexion.php";

$accion = "INSERT INTO información (nombre, correo, mensaje) 
VALUES ('$nombre','$correo','$mensaje')";
$consulta = mysqli_query($conexion,$accion);


if ($consulta!=null) {
    print "<script>alert(\"Agregado exitosamente.\");
    window.location='../contacto.html';</script>";
}

else{
    print "<script>alert(\"No se pudo agregar.\");
    window.location='../contacto.html';</script>";
}


?>