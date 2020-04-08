<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <title>Inicio</title>
    <script src="js/vue.js"></script>
</head>
<body>
    <div class="container">
        <?php include "menu.php"; ?>
        <div id="main2">
            <center> 
            <ul>
                <li><img src="imagen/product.png" alt="">Productos</li>
                <li><img src="imagen/cost.png" alt="">Proveedores</li>
                <li><img src="imagen/buy.png" alt="">Compras</li>
                <li><img src="imagen/sale.png" alt="">Ventas</li>
            </ul>
            <br><br><br>
            <h2>{{saludo}} Administrador</h2>
            <br><br>
            <img src="imagen/user.png" alt="" width="120" height="120">
            </center>
        </div>
    </div>
    <script src="js/efectos.js"></script>
</body>
</html>