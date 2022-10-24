<section class="seccion-producto">
    <div class="contenedor">
        <div class="articulo">
            <div class="articulo__imagenes">
                <div class="imagenes__secundarias">
                    <div class="imagen__secundaria">
                        <img src="src/img/db_productos/<?php echo $producto["imagen1"]; ?>" alt="Foto de <?php echo $producto["nombre"]; ?>">
                    </div>
                    <div class="imagen__secundaria imagen__inactiva">
                        <img src="src/img/db_productos/<?php echo $producto["imagen2"]; ?>" alt="Foto de <?php echo $producto["nombre"]; ?>">
                    </div>
                    <div class="imagen__secundaria imagen__inactiva">
                        <img src="src/img/db_productos/<?php echo $producto["imagen3"]; ?>" alt="Foto de <?php echo $producto["nombre"]; ?>">
                    </div>
                    <div class="imagen__secundaria imagen__inactiva">
                        <img src="src/img/db_productos/<?php echo $producto["imagen4"]; ?>" alt="Foto de <?php echo $producto["nombre"]; ?>">
                    </div>
                </div>
                <div class="imagen__primaria">
                    <img src="src/img/db_productos/<?php echo $producto["imagen1"]; ?>" alt="Foto de <?php echo $producto["nombre"]; ?>">
                </div>
            </div>
            <div class="articulo__info">
                <p class="info__nombre">
                    <?php echo $producto["nombre"]; ?>
                </p>
                <p class="info__precio">$<?php echo number_format($producto["precio"], 2, ".", ","); ?></p>
                <p class="info__desc"><?php echo $producto["descripcion"]; ?></p>
                <p class="info__caracteristicas">
                    <?php echo $caracteristicas; ?>
                </p>
                
                <form method="POST" class="info__acciones" action="">
                    <p class="info__cantidad">Cantidad que te interesa:</p>
                    <input type="number" name="cantidad" value="1" min="1" max="<?php echo $producto["cantidad"]; ?>">
                    <input type="hidden" name="producto_id" value="<?php echo $producto["id"]; ?>">
                    <button type="submit" name="agregar" class="btn btn-primario">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </div>
</section>