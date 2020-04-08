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
    <title>Compras</title>
</head>
<script src="js/vue.js"></script>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <div id="main2">
            <button v-on:click="Agregar=true"><img src="imagen/plus.png" alt="" title="Agregar"></button><br><br><br><br>
            <center>
            <table>
                <thead>
                    <tr>
                        <td v-for="datos in compra">{{datos}}</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    //incluir conexion para mostrar datos
                    include "conexion.php";
                    //Codigo SQL
                    $select="SELECT * FROM compras";
                    //Ejecutar codigo
                    $query=mysqli_query($conexion,$select);
                    //Ciclo para mostrar datos
                    while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $row[0]; ?></td><td><?php echo $row[1]; ?></td><td><?php echo $row[2]; ?></td><td><?php echo $row[3]; ?></td><td><?php echo $row[4]; ?></td><td><?php echo $row[5]; ?></td><td><a href="ModificarCompra.php?id=<?php echo $row[0]; ?>"><input type="button" value="Modificar"></a></td><td><a href="EliminarCompras.php?Id=<?php echo $row[0]; ?>"><input type="button" value="Eliminar"></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </center>
        </div>
        <?php 
        //incluir fechas
           date_default_timezone_set("America/Bogota");
           $fecha_hora=date("Y/m/d H:i");
        ?>
        <div class="modal" v-show="Agregar==true">
            <fieldset>
                <legend><button v-on:click="Agregar=false"><img src="imagen/close.png" alt="" width="10" height="10"></button></legend>
                <center><h3>{{titulo}}</h3></center>
                <br><br>
            <form action="AgregarCompra.php" method="post">
                <input type="text" name="producto" id="" placeholder="Producto"><br><br>
                <input type="text" name="cantidad" id="" placeholder="Cantidad"><br><br>
                <input type="text" name="precioU" id="" placeholder="Precio unitario"><br><br>
                <input type="text" name="precioT" id="" placeholder="Precio Total"><br><br>
                <input type="text" name="fechaHora" id="" value="<?php echo $fecha_hora; ?>"><br><br><br><br>
                <center><input type="submit" value="Agregar"></center>
            </form>
            </fieldset>
        </div>
    </div>
    <script src="js/efectos.js"></script>
</body>
</html>