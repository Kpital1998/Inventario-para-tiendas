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
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <title>Productos</title>
</head>
<script src="js/vue.js"></script>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <div id="main2">
            <button><img src="imagen/plus.png" alt="" title="Agregar" v-on:click="activar()"></button><br><br><br><br>
            <center>
            <table>
                <thead>
                    <tr>
                        <td v-for="cont in productos">{{cont}}</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                include "conexion.php";
                //seleccionamos la tabla
                $mostrar="SELECT * FROM productos";
                //Ejecucion del codigo SQL
                $query=mysqli_query($conexion,$mostrar);
                //Ciclo para mostrar datos
                while ($row=mysqli_fetch_array($query)) {
                ?>
                <tr>
                   <td><img src="data:image/jpg;base64,<?php echo base64_encode($row[1]); ?>" alt="" width="80" height="80"></td><td><?php echo $row[2]; ?></td><td><?php echo $row[3]; ?></td><td><?php echo $row[4]; ?></td><td><?php echo $row[5]; ?></td><td><?php echo $row[6]; ?></td><td><?php echo $row[7]; ?></td><td><?php echo $row[8]; ?></td><td><a href="ModificarProducto.php?id=<?php echo $row[0]; ?>"><input type="button" value="Modificar"></a></td><td><a href="EliminarProducto.php?Id=<?php echo $row[0]; ?>"><input type="button" value="Eliminar"></a></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            </center>
        </div>
        <div class="modal" v-show="Agregar==true">
            <fieldset v-bind:class="clase">
                <legend><button v-on:click="Desactivar()"><img src="imagen/close.png" alt="" width="10" height="10"></button></legend>
                <center><h3>{{titulo}}</h3></center>
                <br><br>
            <form action="AgregarProducto.php" method="post" enctype="multipart/form-data">
                <label for="">Imagen</label>
                <input type="file" name="imagen" id=""><br><br>
                <input type="text" name="nombre" id="" placeholder="Nombre"><br><br>
                <input type="text" name="marca" id="" placeholder="Marca"><br><br>
                <input type="text" name="peso" id="" placeholder="Peso"><br><br>
                <input type="text" name="cantidad" id="" placeholder="Cantidad"><br><br>
                <input type="text" name="compra" id="" placeholder="Compra"><br><br>
                <input type="text" name="venta" id="" placeholder="Venta"><br><br>
                <select name="categoria" id="">
                 <option value="Null">Seleccionar Categoria</option>
                <?php 
                 //Mostrar categorias
                //Incluir conexion
                include "conexion.php";
                //Seleccionar tabla
                $mostrar="SELECT * FROM categorias";
                 //Ejecutar codigo SQL
                $query=mysqli_query($conexion,$mostrar);
                //Ciclo para mostrar datos
                 while ($row=mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option> 
                 <?php }?>
                 </select><br><br><br>
                <center><input type="submit" value="Agregar"></center>
            </form>
            </fieldset>
        </div>
    </div>
    <script src="js/efectos.js"></script>
</body>
</html>