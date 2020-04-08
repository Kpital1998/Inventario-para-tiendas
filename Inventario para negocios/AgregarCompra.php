<?php 

//Conexion
include "conexion.php";

//Valores del formulario
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$uni=$_POST['precioU'];
$total=$_POST['precioT'];
$fecha_hora=$_POST['fechaHora'];

//codigo SQL
$insertar="INSERT INTO compras (producto, cantidad, precioUni, precioTotal, Hora_Fecha) VALUES ('$producto','$cantidad','$uni','$total','$fecha_hora')";

//crear condiciones para ejecutar 
if ($insertar) {
    $query=mysqli_query($conexion,$insertar);
    if ($query) {
        header("Location: compras.php");
    }
}


?>