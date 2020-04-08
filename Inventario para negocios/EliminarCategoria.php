<?php 

include "conexion.php";

$select="SELECT * FROM categorias";

$query=mysqli_query($conexion,$select);

if ($query) {
    $_id=$_GET['Id'];
    $Delete="DELETE FROM categorias WHERE Id='$_id'";
    switch ($Delete) {
        case true:
            $queryDelete=mysqli_query($conexion,$Delete);
            if ($queryDelete) {
               header("Location: categorias.php");
            }
            break;
        
        default:
            echo "Objeto no eliminado";
            break;
    }
}



?>