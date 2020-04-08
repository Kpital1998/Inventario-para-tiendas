<?php 
//incluir conexion
include "conexion.php";
//Valores del formulario
$id=$_POST['codigo'];
$producto=$_POST['producto'];
$cantidad=$_POST['cantidad'];
$uni=$_POST['precioU'];
$total=$_POST['precioT'];
$fecha_hora=$_POST['fechaHora'];

//codigo SQL 
$update="UPDATE compras SET Id='$id',producto='$producto',cantidad='$cantidad',precioUni='$uni',precioTotal='$total',Hora_Fecha='$fecha_hora' WHERE Id='$id'";

if ($update) {
    $query=mysqli_query($conexion,$update);
    switch ($query) {
        case $query==true:
            echo "<script>alert('Dato modificado');</script>";
            header("Location: compras.php");
            break;
        
        default:
            echo "<script>alert('Dato no modificado');</script>";
            break;
    }
}


?>