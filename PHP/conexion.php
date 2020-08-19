<?php
//Conexion a la base de datos 

$hostname_db = "localhost";
$database_db = "mensajes";
$username_db = "root";
$password_db = "";

//Conectar a la base de datos
$conexion = mysqli_connect($hostname_db, $username_db, $password_db)
or die ("No pudo realizar conexión");

// Seleccionar la base de datos donde guarda la información
mysqli_select_db($conexion,$database_db) 
or die ("Ninguna DB seleccionada");

?>