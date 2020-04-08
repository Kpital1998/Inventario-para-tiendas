<?php 
//Incluir conexion
include "conexion.php";

//incluyen valores del formulario
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$precioU=$_POST['precioU'];
$precioTotal=$_POST['precioT'];
$Fecha_Hora=$_POST['fechaHora'];

//Se agrega codigo SQL
$insertar="INSERT INTO ventas (producto, cantidad, precioUni, precioTotal, Hora_Fecha) VALUES ('$producto','$cantidad','$precioU','$precioTotal','$Fecha_Hora')";

//Se crean condiciones para ejecutar codigo SQL
if ($insertar) {
    $query=mysqli_query($conexion,$insertar);
    switch ($query) {
        case $query==true:
            header("Location: venta.php");
            echo "<script>alert('Venta agregada')</script>";
            break;
        
        default:
        echo "<script>alert('Venta no pudo ser agregada')</script>";
            break;
    }
} 


?>