<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <title>Modificar ventas</title>
</head>
<script src="js/vue.js"></script>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <div id="main2">
            <center>
                <h1>Modificar ventas</h1>
                <?php
                //inclusion de la conexion
                include "conexion.php";
                //captacion del ID
                $_id=$_GET['id'];
                //codigo SQL
                $mostrar="SELECT * FROM ventas WHERE ID='$_id'";
                //ejecutar mediante un query
                $query=mysqli_query($conexion,$mostrar);
                //Se inicializa ciclo
                while ($row=mysqli_fetch_array($query)) {
                
                ?>
                <form action="MDV.php" method="post">
                    <input type="text" name="codigo" id="" value="<?php echo $row[0]; ?>"><br><br>
                    <input type="text" name="producto" id="" value="<?php echo $row[1]; ?>"><br><br>
                    <input type="text" name="cantidad" id="" value="<?php echo $row[2]; ?>"><br><br>
                    <input type="text" name="precioU" id="" value="<?php echo $row[3]; ?>"><br><br>
                    <input type="text" name="precioT" id="" value="<?php echo $row[4]; ?>"><br><br>
                    <input type="text" name="fechaHora" id="" value="<?php echo $row[5]; ?>"><br><br><br><br>
                    <input type="submit" value="Modificar">
                </form>
                <?php } ?>
            </center>
        </div>
    </div>
    <script src="js/efectos.js"></script>
</body>
</html>