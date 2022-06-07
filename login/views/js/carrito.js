class Carrito {

    // añadir el producto al carrito 
    comprarProducto(e) {
        e.preventDefault();
        // si se presiona un boton que contenga la clase item
        if (e.target.classList.contains('productoTarget')) {
            const producto = e.target.parentElement.parentElement;
     /*        this.leerDatosProductos(producto); */

     console.log (producto);
        }

    }
    /* leer los datos del producto */
  /*   leerDatosProductos(producto) {
        const infoProducto = {
            imagen: producto.document.getElementBYid(imagentarjeta),
            titulo: producto.document.getElementBYid(nombreprod),
            precio: producto.document.getElementBYid(precio),
            idproducto: producto.document.getElementBYid(prodId),
            cantidad: 1

        }
        this.insertarCarrito(infoProducto)



    } */
}
