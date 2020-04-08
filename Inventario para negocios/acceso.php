<?php 
include "conexion.php";

$user=$_POST['user'];
$pass=$_POST['pass'];

$select="SELECT * FROM registro WHERE nombre='$user' and contrasena='$pass'";

$query=mysqli_query($conexion,$select);

$row= mysqli_fetch_row($query);

if ($row>0) {
    session_start();
    $_SESSION['user']="$user";
    header("Location: index-2.php");
    exit;
}



?>