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
    <title>Proveedores</title>
    <script src="js/vue.js"></script>
</head>
<body>
    <div class="container">
    <?php include "menu.php"; ?>
        <div id="main2">
            <button v-on:click="activar()"><img src="imagen/plus.png" alt="" title="agregar"></button><br><br><br><br>
            <center>
                <table>
                    <thead>
                        <tr>
                            <td v-for="datos in proveedor">{{datos}}</td>
                        </tr>
                    </thead>
                    <?php 
                    //Mostrar datos
                    //Incluir conexion 
                    include "conexion.php";
                    //Seleccionar tabla
                    $select="SELECT * FROM proveedor"; 
                    //Ejecutar SQL
                    $query=mysqli_query($conexion,$select);
                    //Se abre ciclo para mostrar datos
                    while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <tbody>
                     <tr>
                     <td><?php echo $row[1]; ?></td><td><?php echo $row[2]; ?></td><td><?php echo $row[3]; ?></td><td><?php echo $row[4]; ?></td><td><?php echo $row[5]; ?></td><td><a href="ModificarProveedor.php?id=<?php echo $row[0]; ?>"><input type="button" value="Modificar"></a></td><td><a href="EliminarProveedor.php?id=<?php echo $row[0]; ?>"><input type="button" value="Eliminar"></a></td>
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
            <form action="AgregarProveedor.php" method="post">
                <input type="text" name="cedula" id="" placeholder="Cedula"><br><br>
                <input type="text" name="nombre" id="" placeholder="Nombre"><br><br>
                <input type="text" name="apellido" id="" placeholder="Apellido"><br><br>
                <input type="text" name="empresa" id="" placeholder="Empresa"><br><br>
                <input type="text" name="provision" id="" placeholder="Provision"><br><br><br><br>
                <center><input type="submit" value="Agregar"></center>
            </form>
            </fieldset>
        </div>
    </div>
    <script src="js/efectos.js"></script>
</body>
</html>