<?php 

include "conexion.php";

$select="SELECT * FROM productos";

$query=mysqli_query($conexion,$select);

if ($query) {
    $_id=$_GET['Id'];
    $Delete="DELETE FROM productos WHERE Id='$_id'";
    switch ($Delete) {
        case true:
            $queryDelete=mysqli_query($conexion,$Delete);
            if ($queryDelete) {
               header("Location: productos.php");
            }
            break;
        
        default:
            echo "Objeto no eliminado";
            break;
    }
}



?>