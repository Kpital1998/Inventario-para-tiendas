<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/animate.css">
    <title>Login</title>
</head>
<script src="js/vue.js"></script>
<body>
    <div class="container">
        <div id="login">
        <center>
        <fieldset v-if="mostrar==false" class="animated fadeInDown">
            <legend><img src="imagen/user.png" alt="" width="70" height="70"></legend>
            <form action="acceso.php" method="POST" >
                <input type="text" name="user" id="" placeholder="User"><br><br><br>
                <input type="password" name="pass" id="" placeholder="Password"><br><br><br>
                <input type="submit" value="Entrar"><br><br>
                <input type="button" value="Registrarse" @click="mostrar=true">
            </form>
        </fieldset>
        </center>
        </div>
        <div id="registro">
            <center>
                <fieldset v-show="mostrar==true" v-if="pass==pass2" class="animated fadeInDown">
                    <legend><img src="imagen/user.png" alt="" width="70" height="70"></legend>
                    <form action="registro.php" v-if="pass == pass2" method="POST">
                        <input type="text" name="user" id="" placeholder="User"><br><br><br>
                        <input type="password" name="pass" id="" placeholder="Password" v-model="pass"><br><br><br>
                        <input type="password" id="" placeholder="Repetir Password" v-model="pass2"><br><br><br>
                        <input type="submit" value="Registrarse"><br><br>
                        <input type="button" value="Iniciar Sesion" @click="mostrar=false">
                    </form>
                </fieldset>
                    <fieldset v-else class="animated fadeInDown">
                        <legend><img src="imagen/user.png" alt="" width="70" height="70"></legend>
                        <form action="">
                            <input type="text" name="" id="" placeholder="User"><br><br><br>
                            <input type="password" name="" id="" placeholder="Password" v-model="pass"><br><br><br>
                            <input type="password" id="" placeholder="Repetir Password" v-model="pass2"><br>
                            <p>{{mensaje}}</p><br>
                        </form>
                    </fieldset>
            </center>
        </div>
    </div>
    <script>
    new Vue({
        el: ".container",
        data: {
            mostrar: false,
            mensaje: "Las contraseñas no coinciden",
            pass:"",
            pass2:""

        }
    });
    </script>
</body>
</html>