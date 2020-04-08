<?php
include "conexion.php";

$user=$_POST['user'];
$pass=$_POST['pass'];

$insertar="INSERT INTO registro( nombre, contrasena) VALUES ('$user','$pass')";

if ($insertar) {
    $query=mysqli_query($conexion,$insertar);
    switch ($query) {
        case true:
            header("Location: index.php");
            break;
        
        default:
            $mensaje="Usuario no registrado";
            break;
    }
}
?>