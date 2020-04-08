<?php 
include "conexion.php";

$_ID=$_GET['Id'];

$select="SELECT * FROM ventas WHERE Id='$_ID'";

if ($select) {
    $query=mysqli_query($conexion,$select);
    if ($query) {
        $eliminar="DELETE FROM ventas WHERE Id='$_ID'";
        $eliminarSelector=mysqli_query($conexion,$eliminar);
        switch ($eliminarSelector) {
            case true:
                header("Location: venta.php");
                break;
            
            default:
                echo "Objeto no se pudo eliminar";
                break;
        }
    }
}
?>