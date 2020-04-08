<?php 
//Se incluye la conexion
include "conexion.php";

//Valor del formulario
$categoria=$_POST['categoria'];

//Codigo SQL
$insertar="INSERT INTO categorias ( categorias) VALUES ('$categoria')";

if ($insertar) {
    $query=mysqli_query($conexion,$insertar);
    if ($query) {
        header("Location: categorias.php");
    }
}



?>