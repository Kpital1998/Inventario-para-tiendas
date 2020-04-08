<?php

//incluir conexion
include "conexion.php";

//valores del formulario
$id=$_POST['id'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$empresa=$_POST['empresa'];
$provision=$_POST['provision'];

//Codigo sql
$update="UPDATE proveedor SET Id='$id',cedula='$cedula',nombre='$nombre',apellido='$apellido',empresa='$empresa',provision='$provision' WHERE Id='$id'";

//condiciones para ejecutar 
if ($update) {
    $query=mysqli_query($conexion,$update);
    switch ($query) {
        case true:
            header("Location: proveedores.php");
            break;
        
        default:
            echo "Objeto no modificado";
            break;
    }
}

?>