<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Modificar Producto</title>
</head>
<script src="js/vue.js"></script>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <div id="main2">
            <br><br><br>
            <center>
            <h2>Modificar</h2><br><br>
            <?php
                include "conexion.php";
                $_id=$_GET['id'];
                //seleccionamos la tabla
                $mostrar="SELECT * FROM productos WHERE Id='$_id'";
                //Ejecucion del codigo SQL
                $query=mysqli_query($conexion,$mostrar);
                //Ciclo para mostrar datos
                while ($row=mysqli_fetch_array($query)) {
            ?>
            <form action="MDPRO.php" method="post">
                <input type="text" name="id" id="" value="<?php echo $row[0]; ?>"><br><br>
                <input type="text" name="nombre" id="" value="<?php echo $row[2]; ?>"><br><br>
                <input type="text" name="marca" id="" value="<?php echo $row[3]; ?>"><br><br>
                <input type="text" name="peso" id="" value="<?php echo $row[4]; ?>"><br><br>
                <input type="text" name="cantidad" id="" value="<?php echo $row[5]; ?>"><br><br>
                <input type="text" name="compra" id="" value="<?php echo $row[6]; ?>"><br><br>
                <input type="text" name="venta" id="" value="<?php echo $row[7]; ?>"><br><br><br>
                <input type="submit" value="Modificar">
            </form>
                <?php } ?>
            </center>
        </div>
    </div>
    <script src="js/efectos.js"></script>
</body>
</html>