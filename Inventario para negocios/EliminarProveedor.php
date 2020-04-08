<?php 
include "conexion.php";

$select="SELECT * FROM proveedor";

$query=mysqli_query($conexion,$select);

if ($query) {
    $_id=$_GET['id'];
    $Delete="DELETE FROM proveedor WHERE Id='$_id'";
    switch ($Delete) {
        case true:
            $queryDelete=mysqli_query($conexion,$Delete);
            if ($queryDelete) {
               header("Location: proveedores.php");
            }
            break;
        
        default:
            echo "Objeto no eliminado";
            break;
    }
}

?>