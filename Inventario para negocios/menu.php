<div id="main">
            <div class="titulos">
                <ul>
                <li><img src="imagen/menu (2).png" alt="" title="menu" v-on:click="mostrar=true" v-show="mostrar==false"></li> 
                <li><h1>Sistema para inventario de tiendas</h1></li>
                <li><img src="imagen/turn-off.png" alt="" title="Salir" width="30" height="30" v-on:click="mostrarModal=true"></li> 
                </ul>
            </div>
            <div class="lista-opciones" v-if="mostrar==false">
                <a href="index-2.php"><button><img src="imagen/dashboard.png" alt=""></button></a><br>
                <a href="productos.php"><button><img src="imagen/product.png" alt=""></button></a> <br>
                <a href="proveedores.php"><button><img src="imagen/cost.png" alt=""></button></a> <br>
                <a href="compras.php"><button><img src="imagen/buy.png" alt=""></button><br></a>
                <a href="venta.php"><button><img src="imagen/sale.png" alt=""></button></a><br>
                <a href="categorias.php"><button><img src="imagen/backend.png" alt=""></button></a><br>
            </div> 
            <div class="lista-opciones" id="menu2" v-else>
                <img src="imagen/menu (2).png" alt="" v-on:click="mostrar=false">
                <a href="index-2.php"><button><img src="imagen/dashboard.png" alt="">Panel control</button></a><br>
                <a href="productos.php"><button><img src="imagen/product.png" alt="">Productos</button></a><br>
                <a href="proveedores.php"><button><img src="imagen/cost.png" alt="">Proveedores</button></a> <br>
                <a href="compras.php"><button><img src="imagen/buy.png" alt="">Compras</button></a><br>
                <a href="venta.php"><button><img src="imagen/sale.png" alt="imagen">Ventas</button></a><br>
                <a href="categorias.php"><button><img src="imagen/backend.png" alt="">Categoría</button></a>
            </div>
            <div id="modalSalir" class="animated bounceInDown" v-show="mostrarModal==true">
                <center>
                    <fieldset>
                        <h3>Estás seguro de salir?</h3><br>
                        <input type="button" value="Cancelar" v-on:click="mostrarModal=false">
                        <a href="session_destroy.php"><input type="button" value="Salir"></a>
                    </fieldset>
                </center>
            </div>
        </div>