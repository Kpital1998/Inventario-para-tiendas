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
    <title>Ventas</title>
</head>
<script src="js/vue.js"></script>
<body>
    <div class="container">
    <?php include "menu.php"; ?>
        <div id="main2">
            <button v-on:click="Agregar=true"><img src="imagen/plus.png" alt="" title="agregar"></button><br><br><br><br>
            <center>
                <table>
                    <thead>
                        <tr>
                            <td v-for="datos in venta">{{datos}}</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    //incuir conexion para mostrar datos
                    include "conexion.php";
                    //Codigo SQL
                    $select="SELECT * FROM ventas";
                    //Ejecutar codigo
                    $query=mysqli_query($conexion,$select);
                    //Ciclo para mostrar datos
                    while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row[0]; ?></td><td><?php echo $row[1]; ?></td><td><?php echo $row[2]; ?></td><td><?php echo $row[3]; ?></td><td><?php echo $row[4]; ?></td><td><?php echo $row[5]; ?></td><td><a href="ModificarVenta.php?id=<?php echo $row[0]; ?>"><input type="button" value="Modificar"></a></td><td><a href="EliminarVentas.php?Id=<?php echo $row[0]; ?>"><input type="button" value="Eliminar" ></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </center>
        </div>
        <?php 
        date_default_timezone_set("America/Bogota");
        $fecha=date("Y/m/d H:i");
        ?>
        <div class="modal" v-show="Agregar==true">
            <fieldset>
                <legend><button v-on:click="Agregar=false"><img src="imagen/close.png" alt="" width="10" height="10"></button></legend>
                <center><h3>{{titulo}}</h3></center>
                <br><br>
            <form action="AgregarVenta.php" method="post">
                <input type="text" name="producto" id="" placeholder="Producto"><br><br>
                <input type="text" name="cantidad" id="" placeholder="Cantidad"><br><br>
                <input type="text" name="precioU" id="" placeholder="Precio unitario"><br><br>
                <input type="text" name="precioT" id="" placeholder="Precio Total"><br><br>
                <input type="text" name="fechaHora" id="" value="<?php echo $fecha; ?>"><br><br><br><br>
                <center><input type="submit" value="Agregar"></center>
            </form>
            </fieldset>
        </div>
    </div>
    <script src="js/efectos.js"></script>
</body>
</html>