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

$update="UPDATE ventas SET Id='$id',producto='$producto',cantidad='$cantidad',precioUni='$uni',precioTotal='$total',Hora_Fecha='$fecha_hora' WHERE Id='$id'";

switch ($update) {
    case $update==true:
        $query=mysqli_query($conexion,$update);
        if ($query==true) {
            header("Location: venta.php");
        }
        break;
    
    default:
        echo "Cambios no realizados";
        break;
}





?>