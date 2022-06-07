<div class="container-fluid" id="">
    <div class="container" id="logo">
        <img src="images/logo.png" alt="" id="imagenlogo">
    </div>
    <div id="titulo">
        Nuestros productos
    </div>
    <div id="productos" name="productos">

        <?php
        $productos = ControladorProductos::ctrConsultarProductos();
        ?>
        <?php foreach ($productos as $key => $value) :  ?>
            <div class="col-12 col-lg-3 item">
                <div class="card productoTarget" id="productoTarget" style="width: auto;">
                    <img src=<?php echo $value["imagen"] ?> alt="" id="imagentarjeta">
                    <div class="card-body productoTarget">
                        <!-- id oculto para gestion -->
                        <input id="prodId" name="prodId" type="hidden" value="<?php echo $value["id"] ?>">

                        <a href="" class="btn btn-default btn-circle btn-lg agregar_carrito" id="btnprod" data-id="<?php echo $value["id"] ?>"><i class="bi bi-cart-plus"></i>
                        </a>

                        <div class="row" id="info">
                            <div class="col-12" id="nombreprod"> <?php echo $value["nombre"] ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-4">
                                <div id="precio">$ <?php echo $value["precio"] ?></div>
                            </div>

                            <div class="col-md-9 col-8">
                                <p class="card-text" id="descripcion"> <?php echo $value["descripcion"] ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        <?php endforeach ?>

    </div>
</div>