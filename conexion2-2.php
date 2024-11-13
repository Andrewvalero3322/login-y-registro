<?php

/*include para traer nuestro archivo de configuracion*/ 
include("configuracion.php");

/*creamos una variable conexion a la cual le instaciaremos 
nuestras variables de configuracion  */

$conexion = new mysqli($server,$user,$pass,$bd);
if (mysqli_connect_errno()) {
    echo "No conectado"; mysqli_connect_error(); /*mysqli_connect_error() nos muestra el error en caso de haberlo */
    exit();
} //else{
   // echo 'conectado con exito';
//}
?>