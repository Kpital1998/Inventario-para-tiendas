new Vue({
    el: ".container",
    data: {
        mostrar: false,
        mostrarModal: false, 
        Agregar: false,
        clase:"",
        tiempo: new Date().getHours(),
        titulo:"Agregar",
        productos: ["Imagen","Nombre","Marca","Peso","Cantidad","V. Compra","V. venta","Categoria"],
        proveedor: ["Cedula","Nombre","Apellido","Empresa","Provision"],
        compra: ["Codigo","Producto","Cantidad","PrecioUni","PrecioTotal","HoraFecha"],
        venta: ["Codigo","Producto","Cantidad","PrecioUni","Precio Total","HoraFecha"],
        Dato:"" 
    },
    methods:{
        activar: function () {
            this.Agregar=true
            this.clase="animated fadeInDown"
        },

        Desactivar: function () {
            this.Agregar=false
            this.clase="animated fadeIn"
        } 
    },
    computed:{
        saludo(){
            if (this.tiempo>6 && this.tiempo<12) {
                return "Buenos dias"
            } else if(this.tiempo>=12 && this.tiempo<18){
                return "Buenas tardes"
            } else if(this.tiempo>=18 && this.tiempo<24){
                return "Buenas noches"
            }
        }
    }
});