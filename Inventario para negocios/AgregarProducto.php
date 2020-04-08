<?php 
//conexion
include "conexion.php";

//Valores del formulario
$imagen=($_FILES['imagen']['tmp_name']);
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$peso_neto=$_POST['peso'];
$cantidad=$_POST['cantidad'];
$Vcompra=$_POST['compra'];
$Vventa=$_POST['venta'];
$categoria=$_POST['categoria']; 

//Codigo SQL
$insertar="INSERT INTO productos( imagen, nombre, marca, peso_neto, cantUni, valor_compra, valor_venta, categoria) VALUES ('$imagen','$nombre','$marca','$peso_neto','$cantidad','$Vcompra','$Vventa','$categoria')";

//condiciones para ejecutar
if ($insertar) {
    $query=mysqli_query($conexion,$insertar);
    switch ($query) {
        case $query==true:
            header("Location: productos.php");
            break;
        
        default:
            echo "Error en el registro";
            break;
    }
}





?>