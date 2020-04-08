<?php 

include "conexion.php";

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$peso=$_POST['peso'];
$cant=$_POST['cantidad'];
$compra=$_POST['compra'];
$venta=$_POST['venta'];

$update="UPDATE productos SET Id='$id',nombre='$nombre',marca='$marca',peso_neto='$peso',cantUni='$cant',valor_compra='$compra',valor_venta='$venta' WHERE Id='$id'";

if ($update) {
    $query=mysqli_query($conexion,$update);
    switch ($query) {
        case true:
            header("Location: productos.php");
            break;
        
        default:
            echo "Objeto no modificado";
            break;
    }
}




?>