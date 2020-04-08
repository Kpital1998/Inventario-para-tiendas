<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <title>Modificar compra</title>
</head>
<script src="js/vue.js"></script>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <div id="main2">
            <center>
                <h1>Modificar Compra</h1><br><br>
            <form action="MDC.php" method="post">
            <?php 
            //Incluir conexion
            include "conexion.php";
            //Captacion del Id
            $_ID=$_GET['id'];
            //Seleccion del codigo SQL
            $select="SELECT * FROM compras WHERE Id='$_ID'";
            //Ejecucion del codigo
            $query=mysqli_query($conexion,$select);
            //Ciclo para ejecutar
            while ($row=mysqli_fetch_array($query)) {
            ?>
            <input type="text" name="codigo" id="" value="<?php echo $row[0]; ?>"><br><br>
                <input type="text" name="producto" id="" value="<?php echo $row[1]; ?>"><br><br>
                <input type="text" name="cantidad" id="" value="<?php echo $row[2]; ?>"><br><br>
                <input type="text" name="precioU" id="" value="<?php echo $row[3]; ?>"><br><br>
                <input type="text" name="precioT" id="" value="<?php echo $row[4]; ?>"><br><br>
                <input type="text" name="fechaHora" id="" value="<?php echo $row[5]; ?>"><br><br><br><br>
                <input type="submit" value="Modificar">
                <?php } ?> 
            </form>
            </center>
        </div>
    </div>
    <script src="js/efectos.js"></script>
</body>
</html>