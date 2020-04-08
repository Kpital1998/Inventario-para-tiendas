<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<script src="js/vue.js"></script>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <div id="main2">
            <center>
                <?php 
                //Incluir conexion
                include "conexion.php";
                //Captacion del Id
                $_id=$_GET['id'];
                //Codigo SQL
                $select="SELECT * FROM proveedor WHERE Id='$_id'";
                //Ejecutar codigo
                $query=mysqli_query($conexion,$select);
                //Comienzo del ciclo 
                while ($row=mysqli_fetch_array($query)) {
                ?>
            <form action="MDP.php" method="post">
                <input type="text" name="id" id="" value="<?php echo $row[0]; ?>"><br><br>
                <input type="text" name="cedula" id="" value="<?php echo $row[1]; ?>"><br><br>
                <input type="text" name="nombre" id="" value="<?php echo $row[2]; ?>"><br><br>
                <input type="text" name="apellido" id="" value="<?php echo $row[3]; ?>"><br><br>
                <input type="text" name="empresa" id="" value="<?php echo $row[4]; ?>"><br><br>
                <input type="text" name="provision" id="" value="<?php echo $row[5]; ?>"><br><br><br><br>
                <input type="submit" value="Modificar">
            </form>
              <?php } ?>
            </center>
        </div>
    </div>
    <script src="js/efectos.js"></script>
</body>
</html>