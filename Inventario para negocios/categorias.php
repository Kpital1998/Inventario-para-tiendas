<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Categorías</title>
</head>
<script src="js/vue.js"></script>
<body>
    <div class="container">
    <?php include "menu.php";  ?>
    <div id="main2">
    <fieldset>
    <legend>Categorías</legend>
    <ol>
    <?php 
    //Mostrar categorias
    //Incluir conexion
    include "conexion.php";
    //Seleccionar tabla
    $mostrar="SELECT * FROM categorias";
    //Ejecutar codigo SQL
    $query=mysqli_query($conexion,$mostrar);
    //Ciclo para mostrar datos
    while ($row=mysqli_fetch_array($query)) {
    ?>
        <li v-on:mouseover="Dato='eliminar'" v-on:mouseout="Dato=''" ><?php echo $row[1]; ?>&nbsp;&nbsp;&nbsp;<a v-show="Dato=='eliminar'" href="EliminarCategoria.php?Id=<?php echo $row[0]; ?>">Eliminar</a></li>
    <?php
    }
    ?>
    </ol>
    </fieldset>
    <div class="formulario">
    <h4>Ingrese categoría</h4>
    <form action="Agregarcategoria.php" method="post">
      <input type="text" name="categoria" id="categoria"><br><br>
      <input type="submit" value="Agregar">
    </form>
    </div>
    </div>
    </div>
    <script src="js/efectos.js"></script>
</body>
</html>