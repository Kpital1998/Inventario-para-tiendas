<?php 
//incluir conexion
include "conexion.php";
//Valores del formulario
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$empresa=$_POST['empresa'];
$provision=$_POST['provision'];
//Codigo para insertar
$insertar="INSERT INTO proveedor (cedula, nombre, apellido, empresa, provision) VALUES ('$cedula','$nombre','$apellido','$empresa','$provision')";
//Condiciones para ejecutar el SQL
if ($insertar) {
    $query=mysqli_query($conexion,$insertar);
    if ($query) {
        header("Location: proveedores.php");
    }
}


?>