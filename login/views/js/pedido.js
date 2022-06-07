const carro = new Carrito();
const carrito = document.getElementById('carritocompras');
const productos =document.getElementById('lista_carrito');
const listaProductos = document.querySelector('#lista_carrito tbody');

cargarEventos();




function cargarEventos(){
productos.addEventListener('click',(e)=>{carro.comprarProducto(e)});

}
